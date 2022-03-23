# Str("My Somentig String")
php String Objects Chains like length,forEach,filter,replace,repalcAll much More....
###Job
```php
$str = Str("koli");
$str->forEach(function($chr,$index,$string,$argu){
Str($chr)->firstUpper()
  ->echo();
  //K
  //O
  //L
  //I
});
function colors ($color,$index,$array){
  if($color == "red"){
   return "gray";
  }else  if($color == "red"){
   return "white";
  }else {
  return "black";
  }
}
Str(" My  favrouts colores red blue green")->replaceEach("red|blue|green",colors)
->echo() //My  favrouts colores gray white  black

```

## Interface Str class
```php
class Str {
public function  __construct($string)
}


```
