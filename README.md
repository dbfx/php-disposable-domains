# disposable-email-domains
[![Code Climate](https://codeclimate.com/github/dbfx/php-disposable-domains/badges/gpa.svg)](https://codeclimate.com/github/dbfx/php-disposable-domains) [![Issue Count](https://codeclimate.com/github/dbfx/php-disposable-domains/badges/issue_count.svg)](https://codeclimate.com/github/dbfx/php-disposable-domains)

A PHP class to check disposable email domains gathered from various sources.


### Usage
```
use DisposableEmail\DomainList\DomainList;
$list = new DomainList;

 
// Return true/false for a domain you want to check
$list->search("mailinator.com");
 
// Get the entire list as an array 
$fullList = $list->load();
```


