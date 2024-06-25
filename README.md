# Button Scroll Top for Magento 2

## How to install

### 1. Install via composer (recommend)

I recommend you to install Kinuz_ScrollTop module via composer. It is easy to install, update and maintaince.

Run the following command in Magento 2 root folder.

#### 1.1 Install

```
composer require kinuz/scroll-top
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f
```

Run compile if your store in Production mode:

```
php bin/magento setup:di:compile
```

### 2. Copy and paste

If you don't want to install via composer, you can use this way. 

- Download [the latest version here](https://github.com/kincasasbuenas/magento-2-scroll-top/archive/master.zip) 
- Extract `master.zip` file to `app/code/Kinuz/ScrollTop` ; You should create a folder path `app/code/Kinuz/ScrollTop` if not exist.
- Go to Magento root folder and run upgrade command line to install `Kinuz_ScrollTop`:

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

### 2. Configuration

Go to section Stores > Configuration > Kinuz > Button Scroll Top

1. Enable to module

2. Setting the position, left or right spece and bottom space.

![setting module](https://raw.githubusercontent.com/kincasasbuenas/images/main/setting_bst.png)


### 3. Preview module active

Show button scroll top.

![Preview module scrolltop](https://raw.githubusercontent.com/kincasasbuenas/images/main/preview_scrolltop-m2.gif)

