<?php


namespace NobrainerWeb\BilinfoUI\Admin;

use NobrainerWeb\Bilinfo\Listings\CallForPriceListing;
use NobrainerWeb\Bilinfo\Listings\Dealer;
use NobrainerWeb\Bilinfo\Listings\LeaseListing;
use NobrainerWeb\Bilinfo\Listings\Listing;
use NobrainerWeb\Bilinfo\Listings\RetailPriceListing;
use NobrainerWeb\Bilinfo\Listings\TaxFreeRetailPriceListing;
use SilverStripe\Admin\ModelAdmin;

class ListingsAdmin extends ModelAdmin
{
    /**
     * @config string
     */
    private static $menu_title = 'Bil Info';

    /**
     * @config string
     */
    private static $url_segment = 'nw-bilinfo-admin';

    //private static $menu_icon_class = 'font-icon-torsos-all';

    /**
     * @config array
     */
    private static $managed_models = [
        Listing::class                   => ['title' => 'All'],
        RetailPriceListing::class        => ['title' => 'Retail'],
        LeaseListing::class              => ['title' => 'Lease'],
        TaxFreeRetailPriceListing::class => ['title' => 'Tax-free retail'],
        CallForPriceListing::class       => ['title' => 'Call for price'],
        Dealer::class
    ];

    public $showImportForm = false;
}