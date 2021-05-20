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
use Platform\Ecommerce\Models\Brand;
use Platform\Ecommerce\Models\Product;
use Platform\Ecommerce\Models\ProductCategory;
use Platform\Ecommerce\Repositories\Interfaces\ProductCategoryInterface;
use Platform\Ecommerce\Repositories\Interfaces\ProductInterface;
use Theme\Main\Http\Request\LoginRequest;

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
      
        Theme::breadcrumb()->add(__('Home'), url('/'));
        return Theme::scope('index', $data)->render();
    }
    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getblog(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {

        return Theme::scope('market.blog')->render();
    }

    /** 
     * @return \Illuminate\Http\Response|Response
     */
    public function getproduct(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {
        // $slug = $slugRepository->getFirstBy(['key' => 'trang-chu', 'reference_type' => Page::class]);
        // $data['page'] = $pageRepository->getFirstBy(['id' => $slug->reference_id, 'status' => BaseStatusEnum::PUBLISHED]); 
        $data=[];
        $data['product_category']=ProductCategory::query()
        ->get();

        Theme::breadcrumb()->add(__('Sản Phẩm'), route('get_product')); 
        return Theme::scope('Bim_product',$data)->render();
    }

    public function getlogin()
    {
        return Theme::scope('customers.login')->render();
    }

    public function login(LoginRequest $request)
    {
       $input = $request->all();
       $auth = auth()->attempt(['email' => $request->email, 'password' => $request->password]);
       if ($auth) {
           return redirect()->route('get_shoppingbag');
       }
       return back()->withErrors([
           'error' => 'Sai thông tin đăng nhập'
       ]);
    }


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
    public function getreset(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {

        return Theme::scope('customers.passwords.email')->render();
    }


    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getbrand(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {   
        $slug = $slugRepository->getFirstBy(['key' => 'thuong-hieu', 'reference_type' => Page::class]);
        $data['page'] = $pageRepository->getFirstBy(['id' => $slug->reference_id, 'status' => BaseStatusEnum::PUBLISHED]); 
        $data = [];
        $page = $pageRepository->getFirstBy(['id' => config('packages.page.general.thuonghieu')]); 
        dd($page);
         //  lấy sản phẩm từ brand
        // $data['brand']=get_brand_by_id($slug->reference_id);
        // dd(get_brand_by_id($slug->reference_id));
        // $data['products_br']=get_product_by_brand($data['brand']->id);

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
        // dd( $data['A']=Brand::query()
        // ->where('name','like','%a')
        // ->take(7)
        // ->get());

        Theme::breadcrumb()->add(__('Thương Hiệu'), route('public.get_contact')); 
        return Theme::scope('brands-list',$data)->render();
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

    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getshoppingbag(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {

        return Theme::scope('shopping-bag')->render();
    }

    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getinforreship(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {

        return Theme::scope('market.checkout')->render();
    }

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
    public function getwaypay2(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {

        return Theme::scope('market.checkout4')->render();
    }

    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getaboutus(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {

        return Theme::scope('market.about')->render();
    }


       /**
     * @return \Illuminate\Http\Response|Response
     */
        // public function quikview(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
        // {

        //        // lấy ra danh sách sản phẩm sale   
        //        $data['product_sale']=Product::query()
        //        ->where('sale_price','>',0 )
        //        ->take(4)
        //        ->get();
            
        //     return Theme::scope('market.quickview')->render();
        // }

    public function getCategory($slug, SlugInterface $slugRepository, Request $request)
    {
        $slug = $slugRepository->getFirstBy([
            'key' => $slug,
            'reference_type' => ProductCategory::class,
            'prefix' => SlugHelper::getPrefix(ProductCategory::class),
        ]);
        if (!$slug) {
            abort('404');
        }
        // $slugPost = $slugRepository->getFirstBy([
        //     'key' => $slugPost,
        //     'reference_type' => Brand::class,
        //     'prefix' => SlugHelper::getPrefix(Brand::class),
        // ]);
        // if (!$slugbr) {
        //     abort('404');
        // }
        $data['category'] = get_category_by_id($slug->reference_id);
        $data['products'] = get_products_by_category($data['category']->id, 20);
        $data['categories'] = get_product_categories();

       
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
    public function getBlogDetail($slug, $slugPost, PostInterface $postRepository, SlugInterface $slugRepository)
    {
        if (!$slugPost) { 
            abort('404');
        }
        $slugPost = $slugRepository->getFirstBy(['key' => $slugPost, 'reference_type' => Post::class]);
        $data['contentPost'] = $postRepository->getFirstBy(['id' => $slugPost->reference_id]);
        return Theme::scope('market.blog-post', $data)->render();
    }
    
}
