```
java -jar swagger-codegen/modules/swagger-codegen-cli/target/swagger-codegen-cli.jar generate \
   -i https://fomf.ungerboeck.com/TEST/swagger/docs/v1 \
   -l php \
   -o ./ -t ./UngerboeckSDK/code-template -c ./UngerboeckSDK/config.json
```