<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
});

//manufacturer
/***
 *      input
 *              mf_name                 厂家名字
 *              mf_contacts_name        厂家联系人
 *              mf_country_code         电话国家码
 *              mf_tel                  联系人手机
 *              mf_desc                 厂家介绍
 *              mf_address              厂家地址({'province':'北京','city':'北京','area':'大兴区','location':'科创十四街20号院11号楼1单元202'})
 *      output
 *              vdata
 *              {
 *                      'status'    => '200',  200成功  500 失败
 *              }
 */
Route::get(
        '/api/manufacturer/register',
        'ManufacturerController@getManufacturerRegister');
Route::post(
        '/api/manufacturer/register',
        'ManufacturerController@postManufacturerRegister');
/***
 *      input
 *              mf_mid                  厂家mid
 *      output
 *              vdata
 *              {
 *                      'data'    => [
 *                           'mf_name'                  =>      'sss',厂名
 *                           'mf_contacts_name'         =>      'name',联系人
 *                           'mf_country_code'          =>      '11',电话国家码
 *                           'mf_tel'                   =>      '111',手机号
 *                           'mf_desc'                  =>      'desc',介绍
 *                           'mf_address'               =>      'dhg',             厂家地址(省/市/区/具体位置)
 *
 *                      ];
 *              }
 */
Route::get(
        '/api/manufacturer/info',
        'ManufacturerController@getManufacturerInfo');
/***
 *      input
 *              page            第几页
 *              page_size       一页几条
 *              date_start      开始日期（2018-04-12）
 *              date_end        截止日期（2018-04-12）
 *      output
 *              vdata
 *              {
 *                      'data'    => [
 *                           {
 *                              'mf_mid'                   =>      '111',
 *                              'mf_name'                  =>      'sss',
 *                              'mf_contacts_name'         =>      'name',
 *                              'mf_country_code'          =>      '11',
 *                              'mf_tel'                   =>      '111',
 *                              'mf_desc'                  =>      'desc',
 *                              'mf_address'               =>      {'a':'aa'...}
 *                            },
 *                           {
 *                              'mf_mid'                   =>      '112',
 *                              'mf_name'                  =>      'sss',
 *                              'mf_contacts_name'         =>      'name',
 *                              'mf_country_code'          =>      '11',
 *                              'mf_tel'                   =>      '111',
 *                              'mf_desc'                  =>      'desc',
 *                              'mf_address'               =>      {'a':'aa'...}
 *                            },
 *                              ...
 *                      ],
 *                      'page'          =>      '1',
 *                      'page_sie'      =>      '1'
 *              }
 */
Route::get(
        '/api/manufacturer/list',
        'ManufacturerController@getManufacturerList');
/***
 *      input
 *              mf_mid                  厂家mid
 *              mf_name                 厂家名字
 *              mf_contacts_name        厂家联系人
 *              mf_country_code         电话国家码
 *              mf_tel                  联系人手机
 *              mf_desc                 厂家介绍
 *              mf_address              厂家地址({'province':'北京','city':'北京','area':'大兴区','location':'科创十四街20号院11号楼1单元202'})
 *      output
 *              vdata
 *              {
 *                      'status'    => '200',  200成功  100 失败
 *              }
 */
Route::patch(
        '/api/manufacturer/information',
        'ManufacturerController@patchManufacturerInformation');
/***
 *      input
 *              mf_mid                  厂家mid
 *      output
 *              vdata
 *              {
 *                      'status'    => '200',  200成功  100 失败
 *              }
 */
Route::delete(
        '/api/manufacturer/{mf_mid}',
        'ManufacturerController@deleteManufacturer');

//company
/***
 *      input
 *              com_name                 公司名字
 *              com_reg_info             公司注册信息({'a':'a','b':'b',....})
 *              com_country_code         电话国家码
 *              com_tel                  公司座机
 *              com_desc                 公司介绍
 *              com_address              公司地址(省/市/区/具体位置)
 *              com_picture_list_env     环境照片
 *              com_picture_list_qs      资质照片
 *              com_desc                 公司简介
 *              com_remark               备注
 *      output
 *              vdata
 *              {
 *                      'status'    => '200',  200成功  500 失败
 *              }
 */
Route::get(
        '/api/company/register',
        'CompanyController@getCompanyRegister');
Route::post(
        '/api/company/register',
        'CompanyController@postCompanyRegister');
/***
 *      input
 *              com_mid                  公司mid
 *      output
 *              vdata
 *              {
 *                      'info'    => [
 *                              'com_name'              =>'www',
 *                              'com_reg_info'          =>{'dg':'dfh',...}
 *                              'com_country_code'      =>'11',
 *                              'com_tel'               =>'222',
 *                              'com_desc'              =>'eee',
 *                              'com_address'           =>'eee',
 *                              'com_picture_list_env'  =>'https:://fhb.com/dgd.png',
 *                              'com_picture_list_qs'   =>'https:://fhb.com/dgd.png',
 *                              'com_desc'              =>'jfh',
 *                              'com_remark'            =>'gdhj'
 *                       ]
 *              }
 */
Route::get(
        '/api/company/info',
        'CompanyController@getCompanyInfo');
/***
 *      input
 *              page            第几页
 *              page_size       一页几条
 *              date_start      开始日期（2018-04-12）
 *              date_end        截止日期（2018-04-12）
 *      output
 *              vdata
 *              {
 *                      'company'    => [
 *                              {
 *                                      'com_mid'               =>'11',
 *                                      'com_name'              =>'www',
 *                                      'com_reg_info'          =>{'dg':'dfh',...}
 *                                      'com_country_code'      =>'11',
 *                                      'com_tel'               =>'222',
 *                                      'com_desc'              =>'eee',
 *                                      'com_address'           =>'eee',
 *                                      'com_picture_list_env'  =>'https:://fhb.com/dgd.png',
 *                                      'com_picture_list_qs'   =>'https:://fhb.com/dgd.png',
 *                                      'com_desc'              =>'jfh',
 *                                      'com_remark'            =>'gdhj'
 *                              },
 *                              {
 *                                      'com_mid'               =>'12',
 *                                      'com_name'              =>'www',
 *                                      'com_reg_info'          =>{'dg':'dfh',...}
 *                                      'com_country_code'      =>'11',
 *                                      'com_tel'               =>'222',
 *                                      'com_desc'              =>'eee',
 *                                      'com_address'           =>'eee',
 *                                      'com_picture_list_env'  =>'https:://fhb.com/dgd.png',
 *                                      'com_picture_list_qs'   =>'https:://fhb.com/dgd.png',
 *                                      'com_desc'              =>'jfh',
 *                                      'com_remark'            =>'gdhj'
 *                              },
 *                              ....
 *
 *                       ],
 *                      'page'          =>      '1',
 *                      'page_sie'      =>      '1'
 *              }
 */
Route::get(
        '/api/company/list',
        'CompanyController@getCompanyList');
/***
 *      input
 *              com_mid                  公司mid
 *              com_name                 公司名字
 *              com_reg_info             公司注册信息({'a':'a','b':'b',....})
 *              com_country_code         电话国家码
 *              com_tel                  公司座机
 *              com_desc                 公司介绍
 *              com_address              公司地址(省/市/区/具体位置)
 *              com_picture_list_env     环境照片
 *              com_picture_list_qs      资质照片
 *              com_desc                 公司简介
 *              com_remark               备注
 *      output
 *              vdata
 *              {
 *                      'status'    => '200',  200成功  500 失败
 *              }
 */
Route::patch(
        '/api/company/information',
        'CompanyController@patchCompanyInformation');
/***
 *      input
 *              com_mid                  公司mid
 *      output
 *              vdata
 *              {
 *                      'status'    => '200',  200成功  100 失败
 *              }
 */
Route::delete(
        '/api/company/{com_mid}',
        'CompanyController@deleteCompanyInfo');

//store
/***
 *      input
 *              com_mid                  公司mid
 *              staff_mid_owner          店长mid
 *              store_name               门店名称
 *              store_date_start         该店的开业时间
 *              store_address            门店具体位置({'province':'北京','city':'北京','area':'大兴区','location':'科创十四街20号院11号楼1单元202'})
 *              store_country_code       电话国家码
 *              store_tel                客服电话
 *              store_picture_list_env   店铺的图片列表({'k':'v'})
 *              store_picture_list_qs    资质照片列表
 *              store_grade              门店等级
 *              store_labels             门店标签（[md5(label):label])
 *              store_desc               门店描述
 *      output
 *              vdata
 *              {
 *                      'status'    => '200',  200成功  500 失败
 *              }
 */
Route::get(
        '/api/store/register',
        'StoreController@getStoreRegister');
Route::post(
        '/api/store/register',
        'StoreController@postStoreRegister');
/***
 *      input
 *              store_mid       门店mid
 *      output
 *              vdata
 *              {
 *                      'store'=>[
 *                              'com_mid'               =>      '111',公司mid
 *                              'staff_mid_owner'       =>      '11',店长mid
 *                              'store_name'            =>      'ss',门店名称
 *                              'store_date_start'      =>      '2000-10-07',该店的开业时间
 *                              'store_address'         =>      {'province':'北京','city':'北京','area':'大兴区','location':'科创十四街20号院11号楼1单元202'},门店具体位置
 *                              'store_country_code'    =>      '1',电话国家码
 *                              'store_tel'             =>      '11.',客服电话
 *                              'store_picture_list_env'        => {'k':'v'},店铺的图片列表
 *                              'store_picture_list_qs' =>      {'k':'v'},资质照片列表
 *                              'store_grade'           =>      '1',门店等级
 *                              'store_labels'          =>      {'md5(label)':'label',...},             门店标签（[md5(label):label])
 *                              'store_desc'            =>      '11'门店描述
 *                      ]
 *              }
 */
Route::get(
        '/api/store/info',
        'StoreController@getStoreInfo');
/***
 *      input
 *              page            第几页
 *              page_size       一页几条
 *              date_start      开始日期（2018-04-12）
 *              date_end        截止日期（2018-04-12）
 *      output
 *              vdata
 *              {
 *                      'store'=>[
 *                              'com_mid'               =>      '111',公司mid
 *                              'staff_mid_owner'       =>      '11',店长mid
 *                              'store_name'            =>      'ss',门店名称
 *                              'store_date_start'      =>      '2000-10-07',该店的开业时间
 *                              'store_address'         =>      {'province':'北京','city':'北京','area':'大兴区','location':'科创十四街20号院11号楼1单元202'},门店具体位置
 *                              'store_country_code'    =>      '1',电话国家码
 *                              'store_tel'             =>      '11.',客服电话
 *                              'store_picture_list_env'        => {'k':'v'},店铺的图片列表
 *                              'store_picture_list_qs' =>      {'k':'v'},资质照片列表
 *                              'store_grade'           =>      '1',门店等级
 *                              'store_labels'          =>      {'md5(label)':'label',...},             门店标签（[md5(label):label])
 *                              'store_desc'            =>      '11'门店描述
 *                      ]
 *              }
 */
Route::get(
        '/api/store/list',
        '/api/store/StoreController@getStoreList');
Route::get(
        '/api/store/invite_staff',
        '/api/store/StoreController@getStoreInviteStaff');
Route::patch(
        '/api/store/information',
        'StoreController@patchStoreInformation');
Route::delete(
        '/api/store/info',
        'StoreController@deleteStoreInfo');
Route::get(
        '/api/store/eq_item_add',
        'StoreController@getStoreEqItemAdd');
Route::post(
        '/api/store/eq_item_add',
        'StoreController@postStoreEqItemAdd');
Route::get(
        '/api/store/eq_list',
        'StoreController@getStoreEqList');
Route::get(
        '/api/store/eq_item_info',
        'StoreController@getStoreEqItemInfo');
Route::get(
        '/api/store/eq_check',
        'StoreController@getStoreEqCheck');
Route::get(
        '/api/store/eq_check_list',
        'StoreController@getStoreEqCheckList');

//job
Route::get(
        '/api/job/create',
        'JobController@getJobCreate');
Route::post(
        '/api/job/create',
        'JobController@postJobCreate');
Route::get(
        '/api/job/list',
        'JobController@getJobList');
Route::patch(
        '/api/job/information',
        'JobController@patchJobInformation');
Route::delete(
        '/api/job/information',
        'JobController@deleteJobInformation');

//privilege
Route::get(
        '/api/privilege/create',
        'PrivilegeController@getPrivilegeCreate');
Route::post(
        '/api/privilege/create',
        'PrivilegeController@postPrivilegeCreate');
Route::get(
        '/api/privilege/list',
        'PrivilegeController@getPrivilegeList');
Route::patch(
        '/api/privilege/information',
        'PrivilegeController@patchPrivilegeInformattion');
Route::delete(
        '/api/privilege/info',
        'PrivilegeController@deletePrivilegeInfo');
Route::get(
        '/api/privilege/allot',
        'PrivilegeController@getPrivilegeAllot');
Route::patch(
        '/api/privilege/own_allot',
        'PrivilegeController@patchPrivilegeOwnAllot');
Route::get(
        '/api/privilege/own_list',
        'PrivilegeController@getPrivilegeOwnList');

//brand
Route::get(
        '/api/brand/create',
        'BrandController@getBrandCreate');
Route::post(
        '/api/brand/create',
        'BrandController@postBrandCreate');
Route::get(
        '/api/brand/info',
        'BrandController@getBrandInfo');
Route::get(
        '/api/brand/list',
        'BrandController@getBrandList');
Route::patch(
        '/api/brand/information',
        'BrandController@patchBrandInformation');
Route::delete(
        '/api/brand/info',
        'BrandController@deleteBrandInfo');

//series
Route::get(
        '/api/series/create',
        'SeriesController@getSeriesCreate');
Route::post(
        '/api/series/create',
        'SeriesController@postSeriesCreate');
Route::get(
        '/api/series/info',
        'SeriesController@getSeriesInfo');
Route::get(
        '/api/series/list',
        'SeriesController@getSeriesList');
Route::patch(
        '/api/series/information',
        'SeriesController@patchSeriesInformation');
Route::delete(
        '/api/series/info',
        'SeriesController@deleteSeriesInfo');

//product
Route::get(
        '/api/product/create',
        'ProductController@getProductCreate');
Route::post(
        '/api/product/create',
        'ProductController@postProductCreate');
Route::get(
        '/api/product/info',
        'ProductController@getProductInfo');
Route::get(
        '/api/product/list',
        'ProductController@getProductList');
Route::patch(
        '/api/product/information',
        'ProductController@patchProductInformation');
Route::delete(
        '/api/product/info',
        'ProductController@deleteProductInfo');

//equipment
Route::get(
        '/api/equipment/create',
        'EquipmentController@getEquipmentCreate');
Route::post(
        '/api/equipment/create',
        'EquipmentController@postEquipmentCreate');
Route::get(
        '/api/equipment/list',
        'EquipmentController@getEquipmentList');
Route::get(
        '/api/equipment/info',
        'EquipmentController@getEquipmentInfo');
Route::patch(
        '/api/equipment/info',
        'EquipmentController@patchEquipmentInfo');
Route::delete(
        '/api/equipment/info',
        'EquipmentController@deleteEquipmentInfo');

//card_package
Route::get(
        '/api/card_package/kind_type',
        'CardpackageController@getCardpackageKindType');
Route::post(
        '/api/card_package/kind_type',
        'CardpackageController@postCardpackageKindType');
Route::get(
        '/api/card_package/create_info',
        'CardpackageController@getCardpackageCreateInfo');
Route::post(
        '/api/card_package/create_info',
        'CardpackageController@postCardpackageCreateInfo');
Route::get(
        '/api/card_package/info',
        'CardpackageController@getCardpackageInfo');
Route::get(
        '/api/card_package/list',
        'CardpackageController@getCardpackageList');
Route::patch(
        '/api/card_package/information',
        'CardpackageController@patchCardpackageInformation');
Route::delete(
        '/api/card_package/info',
        'CardpackageController@deleteCardpackageInfo');

//card
Route::get(
        '/api/card/purchase',
        'CardController@getCardPurchase');
Route::post(
        '/api/card/purchase',
        'CardController@postCardPurchase');
Route::get(
        '/api/card/info',
        'CardController@getCardInfo');
Route::get(
        '/api/card/list',
        'CardController@getCardList');
Route::patch(
        '/api/card/information',
        'CardController@patchCardInformation');
Route::delete(
        '/api/card/info',
        'CardController@deleteCardInfo');

//coupon_package
Route::get(
        '/api/coupon_package/kind_type',
        'CouponpackageController@getCouponpackageKindType');
Route::post(
        '/api/coupon_package/kind_type',
        'CouponpackageController@postCouponpackageKindType');
Route::get(
        '/api/coupon_package/create_info',
        'CouponpackageController@getCouponpackageCreateInfo');
Route::post(
        '/api/coupon_package/create_info',
        'CouponpackageController@postCouponpackageCreateInfo');
Route::get(
        '/api/coupon_package/info',
        'CouponpackageController@getCouponpackageInfo');
Route::get(
        '/api/coupon_package/list',
        'CouponpackageController@getCouponpackageList');
Route::patch(
        '/api/coupon_package/information',
        'CouponpackageController@patchCouponpackageInformation');
Route::delete(
        '/api/coupon_package/info',
        'CouponpackageController@deleteCouponpackageInfo');
//coupon
Route::get(
        '/api/coupon/purchase',
        'CouponController@getCouponPurchase');
Route::post(
        '/api/coupon/purchase',
        'CouponController@postCouponPurchase');
Route::get(
        '/api/coupon/info',
        'CouponController@getCouponInfo');
Route::get(
        '/api/coupon/list',
        'CouponController@getCouponList');
Route::patch(
        '/api/coupon/information',
        'CouponController@patchCouponInformation');
Route::delete(
        '/api/coupon/info',
        'CouponController@deleteCouponInfo');

//staff
Route::get(
        '/api/staff/register',
        'StaffController@getStaffRegister');
Route::post(
        '/api/staff/register',
        'StaffController@postStaffRegister');
Route::get(
        '/api/staff/info',
        'StaffController@getStaffInfo');
Route::get(
        '/api/staff/list',
        'StaffController@getStaffList');
Route::patch(
        '/api/staff/information',
        'StaffController@patchStaffInformation');
Route::delete(
        '/api/staff/info',
        'StaffController@deleteStaffInfo');
//负责顾客
Route::get(
        '/api/staff/principal_cum',
        'StaffController@getStaffPrincipalCum');
//分配顾客
Route::get(
        '/api/staff/allot_cum',
        'StaffController@getStaffAllotCum');
Route::patch(
        '/api/staff/information',
        'StaffController@patchStaffInformation');

//customer
Route::get(
        '/api/customer/register',
        'CustomerController@getCustomerRegister');
Route::post(
        '/api/customer/register',
        'CustomerController@postCustomerRegister');
Route::get(
        '/api/customer/info',
        'CustomerController@getCustomerInfo');
Route::get(
        '/api/customer/list',
        'CustomerController@getCustomerList');
Route::patch(
        '/api/customer/information',
        'CustomerController@patchCustomerInformation');
Route::delete(
        '/api/customer/info',
        'CustomerController@deleteCustomerInfo');

//schedule
Route::get(
        '/api/schedule/set',
        'ScheduleController@getScheduleSet');
Route::post(
        '/api/schedule/set',
        'ScheduleController@postScheduleSet');
Route::get(
        '/api/schedule/list',
        'ScheduleController@getScheduleList');
Route::patch(
        '/api/schedule/information',
        'ScheduleController@patchScheduleInformation');
Route::delete(
        '/api/schedule/info',
        'ScheduleController@deleteScheduleInfo');
Route::get(
        '/api/schedule/own_list',
        'ScheduleController@getScheduleOwnList');

//sign
Route::get(
        '/api/sign/create',
        'SignController@getSignCreate');
Route::post(
        '/api/sign/create',
        'SignController@postSignCreate');
Route::get(
        '/api/sign/list',
        'SignController@getSignList');
Route::get(
        '/api/sign/info',
        'SignController@getSignInfo');

//book
Route::get(
        '/api/book/create',
        'BookController@getBookCreate');
Route::post(
        '/api/book/create',
        'BookController@postBookCreate');
Route::get(
        '/api/book/info',
        'BookController@getBookInfo');
Route::get(
        '/api/book/list',
        'BookController@getBookList');
Route::patch(
        '/api/book/information',
        'BookController@patchBookInformation');

//order
Route::get(
        '/api/order/create',
        'OrderController@getOrderCreate');
Route::post(
        '/api/order/create',
        'OrderController@postOrderCreate');
Route::get(
        '/api/order/list',
        'OrderController@getOrderList');
Route::get(
        '/api/order/info',
        'OrderController@getOrderInfo');
Route::patch(
        '/api/order/info',
        'OrderController@patchOrderInfo');

//setting
Route::get(
        '/api/setting/create',
        'SettingController@getSettingCreate');
Route::post(
        '/api/setting/create',
        'SettingController@postSettingCreate');
Route::get(
        '/api/setting/list',
        'SettingController@getSettingList');
Route::get(
        '/api/setting/info',
        'SettingController@getSettingInfo');
Route::patch(
        '/api/setting/info',
        'SettingController@patchSettingInfo');