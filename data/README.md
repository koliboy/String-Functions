
### Sytax...
```php
$str = new Str("hello ");
$str->echo(); //hello

Str("KOLi")->echo(); //koli
// retuble  String
echo Str("green red")->is; //green red
```

## prototypes 
> #### ->length
```php
echo Str("koli") -> length; // 4
```
> #### ->is
###### return string
```php
echo Str("koli") -> is; // koli
```
> #### ->call_back()
```php
$str  = Str('back to back String');

$str->echo()
->echoB("<p> Addon More  String</p>")

  ->call_back("New  String")->echo()
```
**output**
```html
back to back String
<p> Addon More  String</p>
New  String
```

> #### ->forEach()
```php
$str  = Str('Hello gurjar');

$str->forEach(
    function ($chr,$index,$string,$argument){
     echo "<div>char is :$chr\n index Of $index\n $argument</div>";  
    },"argument"
);
```
**output**
```html
char is :H index Of 0 argument
char is :e index Of 1 argument
char is :l index Of 2 argument
char is :l index Of 3 argument
char is :o index Of 4 argument
char is : index Of 5 argument
char is :g index Of 6 argument
char is :u index Of 7 argument
char is :r index Of 8 argument
char is :j index Of 9 argument
char is :a index Of 10 argument
char is :r index Of 11 argument
```
global scoop call 
```php
$str  = Str('hello');

$somting = "Somting";

$str->
forEach(
    function ($chr){
        global $somting;
     echo "<div>$chr And  $somting</div>";   
    });
```
**output**
```html
h And Somting
e And Somting
l And Somting
l And Somting
o And Somting
```
 call A function
```php
$str  = Str('hello');

$somting = "Somting";

function call ($chr){
    global $somting;
    echo "<div>$chr And  $somting</div>";   ;  
}

function call_2 ($chr){
    /*data*/
     }
$arrow_call = function ($chr){
    /* Sytax error*/
};     
$str->forEach(call); //true
$str->forEach('call_2'); //true you can call function name  by string name
$str->forEach($arrow_call); //false
```
**output**
```html
h And Somting
e And Somting
l And Somting
l And Somting
o And Somting
```
> #### ->filter()
 also red call back function same [forEach](#-foreach)
```php
$str  = Str('foo');

function good ($chr){
    if($chr == "o"){
        return $chr;
    }
}
$str->filter(good)
->echo()
->echo('<div>F',"</div>"); 
```
**output**
```html
oo
food
```

> #### ->cslashes()
```php
$str  = Str('hello');


$str->cslashes('l')
->echo()
```
**output**
```html
he\l\lo
```

> #### ->slashes()
```php
Str('he\llo')->slashes()
->echo()
```
**output**
```html
he\\llo
```

> #### ->hex2()
```php
Str('hello')->hex2()
->echo()
->bin2()
->echo('<div>',"</div>")
```
**output**
```html
68656c6c6f
hello
```

> #### ->bin2()
```php
Str('hello')->hex2()
->echo()
->bin2()
->echo('<div>',"</div>")
```
**output**
```html
68656c6c6f
hello
```

> #### ->chunk()
```php
Str('hello')->chunk(2,"()")
->echo()
```
**output**
```html
he()ll()o()
```

> #### ->udecode()
```php
Str('he/rr/rrr=?555')->udecode()
->echo()
```
**output**
```html
��=$�u�
```
> #### ->chars()
 red more [count_chars()](https://www.php.net/manual/en/function.count-chars.php)
