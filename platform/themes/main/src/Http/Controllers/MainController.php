<?php

namespace Theme\Main\Http\Controllers;
use Theme;
use Illuminate\Http\Request;
use Platform\Page\Repositories\Interfaces\PageInterface;
use Platform\Slug\Repositories\Interfaces\SlugInterface;
use Platform\Theme\Http\Controllers\PublicController;

class MainController extends PublicController
{
     /**
     * @return \Illuminate\Http\Response|Response
     */
    public function index(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        
        return Theme::scope('index')->render();
    }
     /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getblog(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        
        return Theme::scope('market.blog')->render(); 
    }
    
     /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getproductbim(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        
        return Theme::scope('market.Bim_product')->render(); 
    }
    
      /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getproductsua(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        
        return Theme::scope('market.Bim_product')->render(); 
    }
     /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getproductdetail(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        
        return Theme::scope('market.product-page')->render(); 
    }
     /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getlogin(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        
        return Theme::scope('customers.login')->render(); 
    }
    
     /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getregister(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        
        return Theme::scope('customers.register')->render(); 
    }
    
     /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getreset(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        
        return Theme::scope('customers.passwords.email')->render(); 
    }
    
     
     /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getbrand(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        
        return Theme::scope('market.brands-list')->render(); 
    }
    
     /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getcontact(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        
        return Theme::scope('market.contacts')->render(); 
    }
    
      /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getshoppingbag(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        
        return Theme::scope('market.shopping-bag')->render(); 
    }
    
     /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getinforreship(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        
        return Theme::scope('market.checkout')->render(); 
    }
    
      /**
     * @return \Illuminate\Http\Response|Response
     */
    public function wayshiping(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        
        return Theme::scope('market.checkout2')->render(); 
    }
    
    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getwaypay(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        
        return Theme::scope('market.checkout3')->render(); 
    }
    
     /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getwaypay2(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        
        return Theme::scope('market.checkout4')->render(); 
    }
    
      /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getaboutus(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        
        return Theme::scope('market.about')->render(); 
    }
}
