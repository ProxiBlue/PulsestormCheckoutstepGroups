# PulsestormCheckoutstepGroups

This extension enhances the already great extension by Alan Storm: [http://store.pulsestorm.net/products/magento-custom-checkout-step](Custom Checkout Step)

It ads an option to eliminate the extra checkout step by customer group. Nothing more.

![group](https://www.proxiblue.com.au/media/wysiwyg/Selection_415_1.png)

Some notes:

When purchasing the extension from pulsestorm.net, they generate a custom version for you, by using your purchase name as the extension namespace, including for class names

This does make it less generic to extend, so if you do use this, you must change the values of some files:

- In config.xml you must change the depends to whatever your copy of the extension is called. This is `<Lucasvanstaden_Checkoutstep />` for me.
- In Helper/Data.php you must changed the extended class name to that of your copy of the extension.

Known issue:
============

Your extra step cannot be the first step, else the accordian functionality in checkout goes a bit wonky. This was not an issue for me, so I did not fix it (time is my enemy)

