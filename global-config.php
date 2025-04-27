<?php

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define("URL","http://localhost/foodordering");
} else {
    define("URL","https://groupassignmente2.github.io/e-commerce-food-ordering");
}

define("APPURL", URL);
define("ADMINURL", URL."/admin-panel");
define("IMGURLCATEGORY", URL."/admin-panel/categories-admins/img_category");
define("IMGURLPRODUCT", URL."/admin-panel/products-admins/img_product");