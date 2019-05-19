# Bug fix : Product options date saved less then select date while add to cart
Bug fix : Product options date saved less then select date while add to cart

# Bug fix : Descriptions https://github.com/magento/magento2/issues/22939 
I have just set the time zone from admin configuration.
Time Zone: Gulf Standard Time (Asia/Muscat) Time Zone Configuration
I have a product which has an option for the delivery date and once I am selecting any date and trying to add to cart at that time always 1 date is minus from selected date and save value is always less than one from a selected date see video for more information Issue Video

This issue faced while we have select Gulf Standard Time (Asia/Muscat) Time zone from admin or any other timezone 
### Preconditions (*)
1. Magento Community 2.2.2 
2. PHP 7.1.20-1
3. Ubuntu 16.04.6 LTS
4. Apache2

### Steps to reproduce (*)
1. Create any simple product with custom option and option type must be date e.g Delivery Date 
2. Change Time Zone From Configuration. E.g Gulf Standard Time (Asia/Muscat) Time zone 
3. Catalog configuration In Date & Time Custom Options Use JavaScript Calendar enable it.
4. Set date format for options : dd/mm/YYYY 
5. https://prnt.sc/nqh6z7 see configuration 
5.  On Front end go to product page and select any date from custom product option and try to add to cart and check on cart page you can see one less then selected date is saved in option see this video for more understanding https://www.loom.com/share/df64a448caf445f0a17cf8f49c559f87 

### Expected result (*)
1.  product must be add to cart with correct selected date and on cart page must be show correct selected date.

### Actual result (*)
1.  while we select any date in product option on product page and after add to cart date is less than one always... 
