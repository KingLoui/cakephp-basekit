#i18n

bin/cake i18n extract --extract-core no --overwrite --paths src,config --merge no --output src/Locale

# baking templates

bin/cake bake template XXX --prefix admin --theme KingLoui/BaseKit