
### Sytax...
```php
$str = new Str("hello ");
$str->echo(); //hello

Str("KOLi")->echo(); //koli
// retuble  String
echo Str("green red")->is; //green red
```

## prototypes 
**> #### ->length** 
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
 Alos Like **[forEach()](#-forEach)**  **[replaceEach()](#-replaceEach)**  **[replace()](#-replace)** 
 **[match()](#-replace)**  **[cslice()](#-cslice)**  **[slice()](#-cslice)**
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
> #### ->bin2()
```php
Str('hello')
->hex2()
->echo("<div>","</div>")
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
 
 


 > #### ->crypt()
 > #### ->c32()
 > #### ->md5()
 > #### ->sha1() 
```php
Str("12345678")
->echo("<div> __crypt__ </div>")
->crypt("password")
    ->echo(""<div>","</div>")
    
   ->call_back("hello c32")
    ->echo("<div> __c32__ </div>)
 ->c32("<div>","</div>")
 
 ->call_back("very Hard  password")
 ->echo("<div> __md5__ </div>")
->md5()
->echo("<div>","</div>")
 
 ->call_back("this  sha1")
 ->echo("<div> __sha1__ </div>")
 ->sha1() 
 ->echo("<div>","</div>")
 ->sha1(true)
 ->echo("<div> binary   </div>")
```
**output**
```html

__crypt__
  12345678
paagWgB/nq8gk

__c32__
hello c32
1743027734

__md5__
very Hard  password
a4782ce51ccb1e4edb8035613aa47135

__sha1__
this  sha1
22b5f406e82379c249454b7a8e94e0edb618568b
binary 
��� AR�k�6_{HgA�
```


> #### ->echo()
maltipal echo  output  same object 
Alos Like **[echoB()](#-echoB)**
**[printB()](#-printB)** **[print()](#-print)** **[both()](#-both)**
**[left()](#-left)**  **[right()](#-right)** 
**[dump()](#-dump)**
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
  Alos Like **[arrayTo()](#-toArra)** **[split()](#-split)** **[splitB()](#-splitB)**
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
  Alos Like **[toArray()](#-toArra)** **[split()](#-split)** **[splitB()](#-splitB)**
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
> #### ->toLowerCase()
> #### ->toUpperCase()
text Style
```php

Str("Green yello Pink red")
  ->echo("<p> <div>__sample__ </div>","</p>")
 ->firstLower()->echo("<p> <div>__firstLower__ </div>","</p>")
 ->firstUpper()->echo("<p> <div>__firstUpper__ </div>","</p>")
 ->title()->echo("<p> <div>__All firstUpper__ </div>","</p>")
 ->toLowerCase()->echo("<p> <div>__All Lower__ </div>","</p>")
 ->toUpperCase()->echo("<p> <div>__All Upper__ </div>","</p>");

```
**output**
```html
__sample__
Green yello Pink red
__firstLower__
green yello Pink red
__firstUpper__
Green yello Pink red
__All firstUpper__
Green Yello Pink Red
__All Lower__
green yello pink red
__All Upper__
GREEN YELLO PINK RED
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

> #### ->leftTrim()
> #### ->rightTrim()
> #### ->trim()

```php
Str("Left green red blue Right")
->echo()
->leftTrim("Left")
->echo("<div>","</div>")
-> rightTrim("Right")
-> echo();

Str("Left green red blue Right")
 
 ->trim("Left")->trim("Right")
->echo("<div>trim</div>");
```
**output**
```html
Left green red blue Right
green red blue Right
green red blue
trim
green red blue
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
Alos Like **[echo()](#-echo)**
**[printB()](#-printB)** **[print()](#-print)** **[both()](#-both)**
**[left()](#-left)**  **[right()](#-right)** 
**[dump()](#-dump)**
```php
Str("orgnal text")
->echoB("<p> Other  text  echo,</p>")
->echo() 
->echoB("<s>somting</s>")
->echoB("<div>or  mores ..</div>")
->echo("<b>END</b>");
```
**output**
```html
<p>Other text echo,</p>

orgnal text<s>somting</s>
<div> or mores .. </div>
<b>END</b>orgnal text
```
```php
$string2 = "Today Is  25 march\n"; 
$string3 = "nex day is  26 march";

Str("today day ")
->echoB($string2)
->echoB($string3)

->echo("","<p>sunday<p>");
```
```html
Today Is 25 march nex day is 26 march
today day
<p>sunday</p>
```

```php
$string2 = "Today Is  25 march\n"; 
$string3 = "nex day is  26 march";

$a= Str(" ")
->echoB(Str($string2)->is)
->echoB("<div>$string3</div>")

->echo("<p>Somting<p>")
->both($string2.$string3) // set orgnal String
->echo("<div>","</div>");

var_dump($a->is);
```
```html
Today Is 25 march 
nex day is 26 march
<p> Somting </p>

<div> Today Is 25 march nex day is 26 march <div>
string(40) "Today Is 25 march nex day is 26 march "
```

> #### ->aByte()

```php
echo Str("A")
->aByte();
```
**output**
```html
65
```

> #### ->dump()
Alos Like **[echo()](#-echo)**
**[printB()](#-printB)** **[print()](#-print)** **[both()](#-both)**
**[left()](#-left)**  **[right()](#-right)** 

```php
Str(" i hode  yor  esae learn this  content")
->left("<p>[")
->right(']</p>')
->dump();
```
**output**
```html
string(47) "
[ i hode yor esae learn this content]

"
```


> #### ->parse_str()


```php
Str("name=koli&age=21")
->parse_str("output") 
//->parse_str($output) * sytax error
->echo("<p>","</p>");   

var_dump($output)
```
**output**
```html
<p>name=koli&age=21</p>

array(2) { ["name"]=> string(4) "koli" ["age"]=> string(2) "21" }
```

> #### ->print()
> #### ->printB()
Alos Like **[echo()](#-echo)**
  **[both()](#-both)**
**[left()](#-left)**  **[right()](#-right)** 

```php
Str("hello pink red")
->print("<p>",'</p>')
->echo()
->printB("<p> !good bAy </p>")
->left("@")
->echo()
->print("<p>welcome","</p>");  
```
**output**
```html
<p>hello pink red </p>

hello pink red
<p>!good bAy </p>

@hello pink red
<p> welcome@hello pink red </p>
```

> #### ->left()
> #### ->right()
> #### ->both()
Alos Like **[echo()](#-echo)**
**[printB()](#-printB)** **[print()](#-print)** 
**[dump()](#-dump)**


```php
Str("String")
->left("<span>Left Content conact </span>")
 ->echo ()
 ->right("<span> Right Content conact </span>")
 ->echo("<div>","</div>")
 
 ->left("[")->right("]")
 ->print("<div>","</div>")
 ->both("(",")")
 ->echo();  
```
**output**
```html
<span>Left Content conact </span> String
<span>Left Content conact </span> String <span>Right Content conact </span>
[<span>Left Content conact </span> String <span>Right Content conact </span> ]
([<span>Left Content conact </span> String <span>Right Content conact </span> ])
```

> #### ->quotedP_decode()
> #### ->quotedP_encode()
 go to [quotedP_decode()](https://www.php.net/manual/en/function.quoted-printable-decode.php)
 [quotedP_encode()()](https://www.php.net/manual/en/function.quoted-printable-encode.php)
 
 > #### ->quotemeta()
 ```php
 Str(" foo \ sss (new)")
-> quotemeta()
->echo();
 ?>
 ```
 **output**
 ```html
foo \\ sss \(new\)
```

> #### ->same()
 Alos Like **[compare()](#-compare)**
```php
$string2 = "hello world";

$obj = Str("hello borther")
 
->echo("<div>","</div>")
 ->same($string2);

 
  echo "$obj->value And  percent:$obj->percent%";
 
 
 
$obj1 = Str("hello world")
 
->echo("<div>","</div>")
 ->same($string2);
 
 echo "$obj1->value And  percent:$obj1->percent%";
```
 **output**
 ```html
hello borther
8 And percent:66.666666666667%
hello world
11 And percent:100%
```

> #### ->soundex()
soundex — Calculate the soundex key of a string
```php
Str(" Ajay gurjar")
 ->  soundex()
 ->echo("<div>Calculate the soundex key:","</div>")
```
 **output**
 ```html
Calculate the soundex key:A226
```

> #### ->formate()
 Alos Like **[replace()](#-replace)** **[replaceEach()](#-replaceEach)**  **[replaceAll()](#-replaceAll)**
 **[match()](#-match)**  **[matchAll()](#-matchAll)**
```php
Str("%s green red %s total colors names: is :%d")
->echo("<div>","</div>")
->formate("gray","blue",4)
->echo()  
```
 **output**
 ```html
%s green red %s total colors names: is :%d
gray green red blue total colors names: is :4
```
> #### ->same()
 Alos Like **[compare()](#-compare)**
```php

```
 **output**
 ```html
```
