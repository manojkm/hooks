blaahh.. Just learning git!!!!
---------------------
Sublime Text 3 Preference!!
// File location : Packages/User/Default.sublime-theme

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

-------------------------------------

Grunt LESS process


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

---------------------------------------

Create symlinks to custom LESS files
docker-compose exec phpfpm ./bin/magento dev:source-theme:deploy --type="less" --locale="en_US" --area="frontend" --theme=HookCompany/HookShops css/hooksStyle