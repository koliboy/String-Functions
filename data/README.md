
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
> #### ->uencode()
```php
Str('he/rr/rrr=?555')->udecode()
->echo()->uencode()->echo("\n")
```
**output**
```html
��=$�u� (%/22/222=?4` `
```
> #### ->chars()
 red more [count_chars()](https://www.php.net/manual/en/function.count-chars.php)
 
 > #### ->c32()
```php
echo Str("hello c32")
->c32();
```
**output**
```html
1743027734
```


 > #### ->crypt()
```php
Str("12345678")
->crypt("password")
    ->echo();
```
**output**
```html
paagWgB/nq8gk
```


> #### ->echo()
maltipal echo  output  same object 
```php
Str("orginal text")
->echo()
 ->echo('<div> {',"}</div>")
 
 ->echo("","\n After pregrap <p> Hello php Devloper...")
 
->echo("<p>","<p>");
```
**output**
```html
orginal text
<div> {orginal text} </div>
orginal text After pregrap
<p> Hello php Devloper...</p>
<p> orginal text </p>
```


 > #### ->toArray()
 string to Array Learn more [explode()](https://www.php.net/manual/en/function.explode.php)
```php
$cup = Str("A,b,c")->toArray(",");

$min_cup = Str("A,b,c")->toArray(",",2);

print_r($cup);

print_r($min_cup);
```
**output**
```html
Array ( [0] => A [1] => b [2] => c )
Array ( [0] => A [1] => b,c )
```


 > #### ->arrayTo()
  Array to String Learn more [implode()](https://www.php.net/manual/en/function.implode.php)
```php
$cup = ["S","t","r","i","n","g"];

Str("Text Prosing ?") 
  ->echo()->
arrayTo($cup)
->echo()
->echoB("\n :Right");

```
**output**
```html
Text Prosing ?String :Right
```


> #### ->htmlDecode()
> #### ->htmlEncode()
html_entity_decode — Convert HTML entities to their corresponding characters
tmlentities — Convert all applicable characters to HTML entities
  [Learn more...](https://www.php.net/manual/en/function.html-entity-decode.php)
```php
Str("I'll \"walk\" the <b>dog</b> now")
->htmlDecode()->echo()
->htmlEncode()->echo();

```
**output**
```html
I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now

I'll "walk" the <b>dog</b> now
```

> #### ->htmlspecialEncode()
> #### ->htmlspecialDecode()
[Learn more...](https://www.php.net/manual/en/function.htmlspecialchars-decode.php)
```php
Str("<a href='home'>Hello</a>")
 ->htmlspecialEncode()
 ->echo()
 ->htmlspecialDecode ()
 ->printB("<p> After</p>")
 ->echo('\n')

```
**output**
```html
&lt;a href=&#039;home&#039;&gt;Hello&lt;/a&gt;
After
<a href='home'>Hello</a>
```

> #### ->firstLower()
> #### ->firstUpper()
> #### ->title()
text Style
```php
Str("Green yello Pink red") 
 ->firstLower()->echo("<p> __firstLower__ </p>")
 ->firstUpper()->echo("<p> __firstUpper__ </p>")
 ->title()->echo("<p> __All firstUpper__ </p>");

```
**output**
```html
__firstLower__

green yello Pink red
__firstUpper__

Green yello Pink red
__All firstUpper__

Green Yello Pink Red
```

> #### ->distance()

```php
echo "distance is:".Str("ok poor")
->distance("%90 poor");
 //poor == poor 
 //ok  !=%90 //3
 //\s == \s

```
**output**
```html
distance is:3
```

> #### ->ltrim()

```php
Str("very large text")
 ->echo("","<p> _______ </p>")
->ltrim('very')
->echo();

```
**output**
```html
very large text
_______

large text
```

> #### ->md5()

```php
Str("very Hard  password")
 ->echo("","<p> _______ </p>")
->md5()
->echo();
```
**output**
```html
very Hard password
_______

a4782ce51ccb1e4edb8035613aa47135
```


> #### ->lineBreaks()

```php
Str("1.First Chapter \n  2.Secount Chapter \n 3.Thired Chapter")
 ->echo("","<p> _______ </p>")
->lineBreaks()
->echo()
```
**output**
```html
 1.First Chapter 2.Secount Chapter 3.Thired Chapter
___results____

1.First Chapter
2.Secount Chapter
3.Thired Chapter
```

> #### ->echoB()

```php
Str("orgnal text")
->echoB("<p> Other  text  echo,</p>")
->echo() 
->echoB("<s>somting</s>")
->echoB("<div>or  mores ..</div>")
->echo("<b>END</b>")
```
**output**
```html
 Other text echo,

orgnal textsomting
or mores ..
ENDorgnal text
```
