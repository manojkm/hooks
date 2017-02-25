blaahh.. Just learning git!!!!
---------------------

//
//Sublime Text 3 Preference!!
// File location : Packages/User/Default.sublime-theme
//-----------------------------------------------------------------

[
    {
        "class": "sidebar_label",
        "color": [0, 0, 0],
        "font.bold": false,
        "font.size": 14
    },

    {
        "class": "sidebar_label",
        "parents": [{"class": "tree_row","attributes": ["hover"]}],
        "color": [255,0,0] 
    },

    {
    "class": "sidebar_tree",
    //"row_padding": [8, 3],
    "row_padding": [8, 4],
    "indent": 12,
    "indent_offset": 17,
    "indent_top_level": false,
    "layer0.tint": [230, 230, 230],
    "layer0.opacity": 1.0,
    "dark_content": false
    }, 
]

// User settings file : Preferences → Settings - User

{
    "color_scheme": "Packages/Color Scheme - Default/Monokai.tmTheme",
    "font_size": 11,
    "caret_style": "phase",
    "highlight_line": true,
    "fade_fold_buttons": false,
    "ignored_packages":
    [
        "Vintage"
    ]

}

//
// Grunt LESS process
//-----------------------------------------------

Step1:
docker-compose run --rm node grunt clean:HookShops

Step2: Create symlinks to LESS files.
docker-compose exec phpfpm ./bin/magento dev:source-theme:deploy --type=less --locale=en_US --area=frontend --theme=HookCompany/HookShops

Step3:
docker-compose run --rm node grunt less:HookShops

Step4:
docker-compose run --rm node grunt watch:HookShops

OR ----------------------------------

Step1:
docker exec -it b4605f680c82 bash

Step2:
rm -R pub/static/*
rm -rf var/di/* var/generation/* var/cache/* var/page_cache/* var/view_preprocessed/* var/composer_home/cache/*
exit

Step3:  create symlinks to LESS files.
docker-compose exec phpfpm ./bin/magento dev:source-theme:deploy --type=less --locale=en_US --area=frontend --theme=HookCompany/HookShops

step4:
docker-compose run --rm node grunt less:HookShops

//
//Create symlinks to custom LESS files
//-------------------------------------------------

docker-compose exec phpfpm ./bin/magento dev:source-theme:deploy --type="less" --locale="en_US" --area="frontend" --theme=HookCompany/HookShops css/hooksStyle

//
// Running Magento CLI tool
//-------------------------------------------------

docker-compose exec phpfpm ./bin/magento

//
// Install Pestle  - https://github.com/astorm/pestle, http://alanstorm.com/magento2_pestle_code_generation/
//-------------------------------------------------

Step1:
docker exec -it b4605f680c82 bash

Step2:
curl -LO http://pestle.pulsestorm.net/pestle.phar

You can see a list of commands with the following
docker-compose exec phpfpm  php pestle.phar list

Creating the Module
docker-compose exec phpfpm  php pestle.phar generate_module

Shell script
pestle.phar generate_module Pulsestorm HelloPestle 0.0.1
pestle.phar generate_route Pulsestorm_HelloPestle frontend hello_pestle
pestle.phar generate_view Pulsestorm_HelloPestle frontend hello_pestle_index_index Main content.phtml




