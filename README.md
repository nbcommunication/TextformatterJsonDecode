# ProcessWire JSON Decode Textformatter

Passes the given text through `json_decode()`, returning the value (if valid) as a `StdClass` object.

This is particularly useful if you are storing JSON from an API in a Page field and want to access it in a similar way to normal Page objects e.g.

```php
// The data in the page's api_data field
// {"fieldName": "value"}
echo $page->api_data->fieldName; // value
```

In most cases this Textformatter will be used on Textarea fields.
