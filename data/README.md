
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
echo Str("koli") -> length; // 4
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
