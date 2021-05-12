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
        // Theme::breadcrumb()->add(__('Sản Phẩm'), route('get_product')); 
        return Theme::scope('Bim_product')->render();
    }


    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getproductdetail(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {

        return Theme::scope('detail_page')->render();
    }
    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getlogin(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {


        return Theme::scope('customers.login')->render();
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
        Theme::breadcrumb()->add(__('Thương Hiệu'), route('public.get_contact')); 
        return Theme::scope('brands-list')->render();
    }

    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getcontact(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    {

        Theme::breadcrumb()->add(__('Liên Hệ'), route('get_brand')); 
        return Theme::scope('contacts')->render();
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
    //    /**
    //  * @return \Illuminate\Http\Response|Response
    //  */
    // public function quikview(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request)
    // {

    //     return Theme::scope('market.quickview')->render();
    // }
     
}
