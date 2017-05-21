echo "Adding kirby plainkit as submodule";
git submodule add https://github.com/getkirby/plainkit.git web

echo "Installing kirby CLI";
composer global require getkirby/cli

#echo "get latest kirby core & modules...";
#git submodule update --recursive --remote

# for git > 1.7.3
# git submodule update --init --recursive

echo "linking site ...";
rm -rf web/site
ln -s ../custom/site web/site

echo "linking content ...";
rm -rf web/content
ln -s ../custom/content web/content

echo "linking assets ...";
rm -rf web/assets
ln -s ../custom/assets web/assets

echo "copying robots.txt ...";
cp  infrastructure/robots.txt web/robots.txt

echo "Installing some kirby plugins";
cd web;
kirby plugin:install Thiousi/kirby-version-widget
kirby plugin:install jenstornell/kirby-panel-prevnext
kirby plugin:install storypioneers/kirby-selector
kirby plugin:install 1n3JgKl9pQ6cUMrW/kirby-tabs
kirby plugin:install distantnative/field-switch
kirby plugin:install medienbaecker/kirby-fieldtoggle
kirby plugin:install SebastianEberlein/kirby-markdown-field
#kirby plugin:install JonasDoebertin/kirby-visual-markdown # for more WYSIWYG feeling
kirby plugin:install JonasDoebertin/kirby-range-slider

# Forms
kirby plugin:install mzur/kirby-uniform
#skirby plugin:install fetzi/kirby-uniform-recaptcha

# Like Buttons
kirby plugin:install jenstornell/kirby-nja
mv site/plugins/kirby-nja/assets assets/plugins/kirby-nja/

# Panel bar
kirby plugin:install distantnative/panel-bar
mv site/plugins/panel-bar/assets assets/plugins/panel-bar/

# Cache widget
# noch buggy. installiert ins falsche verzeichnis.
#kirby plugin:install omz13/kirby-cache-widgets



echo "Creating user 'admin' with password 'admin'";
kirby make:user -u admin -p admin

echo "";
echo "*********************************************************";
echo "";
echo "Installation completed. Maybe you wanna run now 'run.sh'...";
echo "";
echo "*********************************************************";
