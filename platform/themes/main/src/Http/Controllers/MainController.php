<?php

namespace Theme\Main\Http\Controllers;

use Platform\Theme\Http\Controllers\PublicController;
use Platform\Page\Models\Page;
use App\Models\User;
use Platform\Page\Repositories\Interfaces\PageInterface;
use Platform\Slug\Repositories\Interfaces\SlugInterface;
use Platform\Blog\Repositories\Interfaces\CategoryInterface;
use Platform\Blog\Models\Category;
use Platform\Base\Enums\BaseStatusEnum;
use Illuminate\Http\Request;
use Platform\Blog\Models\Post;
use Platform\Blog\Repositories\Interfaces\PostInterface;
use Platform\Contact\Http\Requests\ContactRequest;
use Platform\Contact\Models\Contact;
use Spatie\Searchable\ModelSearchAspect;
use Spatie\Searchable\Search;
use Illuminate\Support\Str;
use Platform\SeoHelper\SeoOpenGraph;
use SlugHelper;
use Theme;
use MetaBox;
use SeoHelper;
use RvMedia;
use EmailHandler;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Platform\Ecommerce\Models\Brand;
use Platform\Ecommerce\Models\Product;
use Platform\Ecommerce\Models\ProductCategory;
use Platform\Ecommerce\Repositories\Interfaces\BrandInterface;
use Platform\Ecommerce\Repositories\Interfaces\ProductCategoryInterface;
use Platform\Ecommerce\Repositories\Interfaces\ProductInterface;
use Platform\Slug\Models\Slug;
use Theme\Main\Http\Request\LoginRequest;
Use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Platform\ACL\Models\User as PlatformUser;
use Platform\ACL\Models\User as PlatformACLUser;
use Platform\Blog\Models\Tag;
use Platform\Cart\Models\Cart;
use Platform\CartDetail\Models\CartDetail;
use Platform\Ecommerce\Models\Customer;
use Stripe\Price;
use Theme\Main\Http\Request\RegisterRequest;

class MainController extends PublicController
{
    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function index(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {
        $slug = $slugRepository->getFirstBy(['key' => 'trang-chu', 'reference_type' => Page::class]);
        $data['page'] = $pageRepository->getFirstBy(['id' => $slug->reference_id, 'status' => BaseStatusEnum::PUBLISHED]); 
        $data = [];
        $page = $pageRepository->getFirstBy(['id' => config('packages.page.general.trangchu')]); 
        if (!$page) {
            return view('theme.main::views.404');
        }
        $data['page'] = $page;
        //Lấy ra tất cả các sản phẩm nổi bật
        $data['products'] = Product::query()
            ->orWhere('is_featured', '!=' , 0)
            ->orderBy('is_featured', 'asc')
            ->take(8)
        ->get();
       
        // lấy ra danh sách Thương hiệu 
        $data['brand'] = Brand::query()
        ->get();
        
        // lấy ra danh sách sản phẩm sale   
        $data['product_sale']=Product::query()
        ->where('sale_price','>',0 )
        ->get();

        // lấy ra tất cả các sản phẩm trong thương hiệu
        $data['products_1']=Product::query()
        ->Where('brand_id', '=' ,1 )
        ->take(12)
        ->get();

        //lấy ra 2 bài viết mới nhất thuộc tin tức
        $data['newPosts'] = get_posts_by_category(5); 
      
        //  card header
        
        
        Theme::breadcrumb()->add(__('Home'), url('/'));
        return Theme::scope('index', $data)->render();
    }
   
    // /** 
    //  * @return \Illuminate\Http\Response|Response
    //  */
    // public function getproduct(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    // {
    //     $data=[];
    //     $data['product_category']=ProductCategory::query()
    //     ->get();

    //     Theme::breadcrumb()->add(__('Sản Phẩm'), route('get_product')); 
    //     return Theme::scope('Bim_product',$data)->render();
    // }

     /** 
     * @return \Illuminate\Http\Response|Response
     */
    public function getlogin()
    {
        return Theme::scope('customers.login')->render();
    }

    // public function login(){
    //     // return Theme::scope('index')->render();
    // }

    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getregister(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {

        return Theme::scope('customers.register')->render();
    }
      /**
     * @return \Illuminate\Http\Response|Response
     */
    public function register(RegisterRequest $request)
    {

        try {
           
            $user= Customer::query()->where('email',$request->email)->first();
            if(!$user){
                $newUser=new Customer();
                $newUser->name=$request->name;
                $newUser->email=$request->email;
                $newUser->phone=$request->phone;
                $newUser->password= Hash::make($request->get('password'));
                $newUser->save();
                //create cart customer
                $dataCart = [];
                $dataCart['customerId'] = $newUser->id;
                $saveCart = Cart::saveCart($dataCart);
                return redirect()->route('get_dangky')->with('success','Bạn Đã tạo tài khoản, mời bạn đăng nhập');
            }
            else{
                return redirect()->back()->with('success','Tài khoản đã tồn tại, mời bạn đăng nhập');
            }
        } catch (Exception $e) {
            logger($e->getMessage() . ' at ' . $e->getLine() .  ' in ' . $e->getFile());
        }
        return Theme::scope('customers.register')->render();
    }


    // /**
    //  * @return \Illuminate\Http\Response|Response
    //  */
    // public function getreset(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    // {

    //     return Theme::scope('customers.passwords.email')->render();
    // }

    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getViewBrand(PageInterface $pageRepository,SlugInterface $slugRepository, Request $request)
    {

        $slug = $slugRepository->getFirstBy(['key' => 'thuong-hieu', 'reference_type' => Page::class]);
        $data['page'] = $pageRepository->getFirstBy(['id' => $slug->reference_id, 'status' => BaseStatusEnum::PUBLISHED]); 
        $page = $pageRepository->getFirstBy(['id' => config('packages.page.general.thuonghieu')]); 
        $data['A']=Brand::query()
        ->where('name','like','a%')
        ->take(7)
        ->get();
        $data['B']=Brand::query()
        ->where('name','like','b%')
        ->take(7)
        ->get();
        $data['C']=Brand::query()
        ->where('name','like','c%')
        ->take(7)
        ->get();
        $data['D']=Brand::query()
        ->where('name','like','d%')
        ->take(7)
        ->get();
        $data['E']=Brand::query()
        ->where('name','like','e%')
        ->take(7)
        ->get();
        $data['F']=Brand::query()
        ->where('name','like','f%')
        ->take(7)
        ->get();
        $data['G']=Brand::query()
        ->where('name','like','g%')
        ->take(7)
        ->get();
        $data['H']=Brand::query()
        ->where('name','like','h%')
        ->take(7)
        ->get();
        $data['I']=Brand::query()
        ->where('name','like','i%')
        ->take(7)
        ->get();
        $data['J']=Brand::query()
        ->where('name','like','j%')
        ->take(7)
        ->get();
        $data['K']=Brand::query()
        ->where('name','like','k%')
        ->take(7)
        ->get();
        $data['L']=Brand::query()
        ->where('name','like','l%')
        ->take(7)
        ->get();
        $data['M']=Brand::query()
        ->where('name','like','m%')
        ->take(7)
        ->get();
        $data['N']=Brand::query()
        ->where('name','like','n%')
        ->take(7)
        ->get();
        $data['O']=Brand::query()
        ->where('name','like','o%')
        ->take(7)
        ->get();
        $data['P']=Brand::query()
        ->where('name','like','p%')
        ->take(7)
        ->get();
        $data['Q']=Brand::query()
        ->where('name','like','q%')
        ->take(7)
        ->get();
        $data['R']=Brand::query()
        ->where('name','like','r%')
        ->take(7)
        ->get();
        $data['S']=Brand::query()
        ->where('name','like','s%')
        ->take(7)
        ->get();
        $data['T']=Brand::query()
        ->where('name','like','t%')
        ->take(7)
        ->get();
        $data['U']=Brand::query()
        ->where('name','like','u%')
        ->take(7)
        ->get();
        $data['V']=Brand::query()
        ->where('name','like','v%')
        ->take(7)
        ->get();
        $data['W']=Brand::query()
        ->where('name','like','w%')
        ->take(7)
        ->get();
        $data['X']=Brand::query()
        ->where('name','like','x%')
        ->take(7)
        ->get();
        $data['Y']=Brand::query()
        ->where('name','like','y%')
        ->take(7)
        ->get();
        $data['Z']=Brand::query()
        ->where('name','like','z%')
        ->take(7)
        ->get();
        Theme::breadcrumb()->add(__('Thương Hiệu'), route('public.get_contact')); 
        return Theme::scope('brands-list',$data)->render();

    }


    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getbrand($slug,PageInterface $pageRepository,ProductInterface $productInterface,BrandInterface $brandRepository, SlugInterface $slugRepository, Request $request)
    {
        $slug = $slugRepository->getFirstBy([
            'key' => $slug,
            'reference_type' => Brand::class,
            'prefix' => SlugHelper::getPrefix(Brand::class),
        ]);

        if (!$slug) {
            abort('404');
        }
        $data['brand_slug'] = get_brand_by_id($slug->reference_id);
        $data['products'] = get_products_By_Brands_Paginate($data['brand_slug']->id, 6);
    
        $data['categories'] = get_product_categories();
        $data['brand']= get_all_brands();

        //sliders product
        $data['sliders'] = theme_option('product_slider');
        $data['sliders'] = explode(",", $data['sliders']);
        unset($data['sliders'][0]);
        foreach ($data['sliders'] as $k => $value) {
            if ($k == 0) {
                continue;
            }
            if ($k == count($data['sliders'])) {
                $data['sliders'][$k] = str_ireplace( array( '\'', '"', ',' , ';', '<', '>', ']'), ' ', $value);
            } else {
                $data['sliders'][$k] = str_ireplace( array( '\'', '"', ',' , ';', '<', '>' ), ' ', $value);
            }
            $data['sliders'][$k] = trim($data['sliders'][$k]);
        }
        return Theme::scope('brand_product',$data)->render();
    }

    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getcontact(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {
        $slug = $slugRepository->getFirstBy(['key' => 'lien-he', 'reference_type' => Page::class]);
        $data['page'] = $pageRepository->getFirstBy(['id' => $slug->reference_id, 'status' => BaseStatusEnum::PUBLISHED]); 
        $data = [];
        $page = $pageRepository->getFirstBy(['id' => config('packages.page.general.lienhe')]); 
        if (!$page) {
            return view('theme.main::views.404');
        }
        Theme::breadcrumb()->add(__('Liên Hệ'), route('public.get_contact')); 
        return Theme::scope('contacts',$data)->render();
    }

    // /**
    //  * @return \Illuminate\Http\Response|Response
    //  */
    // public function getshoppingbag(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    // {

    //     return Theme::scope('shopping-bag')->render();
    // }

 

    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function wayshiping(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {

        return Theme::scope('market.checkout2')->render();
    }
 
    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getwaypay(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {

        return Theme::scope('market.checkout3')->render();
    }

 
    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getaboutus(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {

        return Theme::scope('market.about')->render();
    }


    public function getCategory($slug, SlugInterface $slugRepository,BrandInterface $brandRepository, Request $request)
    {

        $slug = $slugRepository->getFirstBy([
            'key' => $slug,
            'reference_type' => ProductCategory::class,
            'prefix' => SlugHelper::getPrefix(ProductCategory::class),
        ]);
        if (!$slug) {
            abort('404');
        }
        $data['category'] = get_category_by_id($slug->reference_id);
        $data['products'] = get_products_by_category($data['category']->id, 6);
        $data['categories'] = get_product_categories();
        // // Lấy brand
        $data['brand']= get_all_brands();


        //sliders product
        $data['sliders'] = theme_option('product_slider');
        $data['sliders'] = explode(",", $data['sliders']);
        unset($data['sliders'][0]);
        foreach ($data['sliders'] as $k => $value) {
            if ($k == 0) {
                continue;
            }
            if ($k == count($data['sliders'])) {
                $data['sliders'][$k] = str_ireplace( array( '\'', '"', ',' , ';', '<', '>', ']'), ' ', $value);
            } else {
                $data['sliders'][$k] = str_ireplace( array( '\'', '"', ',' , ';', '<', '>' ), ' ', $value);
            }
            $data['sliders'][$k] = trim($data['sliders'][$k]);
        }
        return Theme::scope('Bim_product', $data)->render();
    }
     /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getproductdetail($slug,$slugPost, ProductInterface $productRepository, SlugInterface $slugRepository)
    {
        
        $slug = $slugRepository->getFirstBy(['key' => $slug, 'reference_type' => ProductCategory::class]);
        if (!$slugPost) {
            abort('404');
        }
        
        $slugPost = $slugRepository->getFirstBy(['key' => $slugPost, 'reference_type' => Product::class]);
        $data['contentProduct'] = $productRepository->getFirstBy(['id' => $slugPost->reference_id]);
        $data['products_related']= get_related_products($slug);
        //  lấy ra danh sách sản phẩm sale   
         $data['product_sale']=Product::query()
         ->where('sale_price','>',0 )
         ->take(4)
         ->get();
        return Theme::scope('detail_page',$data)->render();
    }

     /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getBlogTotal(PostInterface $postRepository)
    {

        $data['post_all']=$postRepository->getAllPosts(6);
        $data['categories'] = get_product_categories();
        $data['featured'] = get_featured_posts(3,[]);
        $data['tags']=get_all_tags();

        // dd(  $data['tag']);
        Theme::breadcrumb()->add(__('Tin Tức'), route('blog.index')); 
        return Theme::scope('market.blog', $data)->render();
    }

     /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getblog($slug, PostInterface $postRepository, SlugInterface $slugRepository)
    {
        $slug = $slugRepository->getFirstBy(['key' => $slug, 'reference_type' => Category::class]);
        if(!$slug)
        {
            abort('404');
        }
        $data['tag_post']=get_posts_by_tag($slug,12);
      
        return Theme::scope('market.blog',$data)->render();
    }


    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getBlogDetail($slug, $slugPost, PostInterface $postRepository, SlugInterface $slugRepository)
    {
        if (!$slugPost) { 
            abort('404');
        }
        $slugPost = $slugRepository->getFirstBy(['key' => $slugPost, 'reference_type' => Post::class]);
        $data['contentPost'] = $postRepository->getFirstBy(['id' => $slugPost->reference_id]);
        $data['featured'] = get_featured_posts(3,[]);
        $data['categories'] = get_product_categories();
        $data['tags']=get_all_tags();

        return Theme::scope('market.blog-post', $data)->render();

    }

    // 

    /**
     * @return \Illuminate\Http\Response|Response
     */
     public function getViewSeach(Request $request)
    {      
        $data['key'] = $request['q'];
        $data['result'] = Product::search($data['key']);
        $data['countResult']= count($data['result']);

        //sliders product
           $data['sliders'] = theme_option('product_slider');
           $data['sliders'] = explode(",", $data['sliders']);
           unset($data['sliders'][0]);
           foreach ($data['sliders'] as $k => $value) {
               if ($k == 0) {
                   continue;
               }
               if ($k == count($data['sliders'])) {
                   $data['sliders'][$k] = str_ireplace( array( '\'', '"', ',' , ';', '<', '>', ']'), ' ', $value);
               } else {
                   $data['sliders'][$k] = str_ireplace( array( '\'', '"', ',' , ';', '<', '>' ), ' ', $value);
               }
               $data['sliders'][$k] = trim($data['sliders'][$k]);
           }
           return Theme::scope('search',$data)->render();
        
        
    }
     /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getViewSeachBlog( PostInterface $postRepository, Request $request)
    {
        $data['key'] = $request['q'];
        $data['result'] = Post::search($data['key']);
        $data['countResult']= count($data['result']);
        $data['post_all']=$postRepository->getAllPosts(6);
        $data['categories'] = get_product_categories();
        $data['featured'] = get_featured_posts(3,[]);
        $data['tags']=get_all_tags();
        return Theme::scope('searchBlog',$data)->render();
    }
    

   /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getBlogTag($slug, SlugInterface $slugRepository,PostInterface $postRepository)
    {
        
         $slug = $slugRepository->getFirstBy([
            'key' => $slug,
            'reference_type' => Tag::class,
            'prefix' => SlugHelper::getPrefix(Tag::class),
        ]);
        // dd($slug);
        if (!$slug) {
            abort('404');
        }
        $data['categories'] = get_product_categories();
        $data['featured'] = get_featured_posts(3,[]);
        $data['tags']=get_all_tags();
        $data['tag'] = get_tag_by_id($slug->reference_id);
        $data['post_all'] = get_posts_by_tag($data['tag']->id);
        return Theme::scope('market.blog',$data)->render();
    }
}
