<?php
$definition = json_decode(file_get_contents("./ace.json"), true);

usort($definition['functions'], function ($a, $b) {
    return $a['scope'] < $b['scope'];
});

foreach ($definition['functions'] as $function) {
    print_r($function);
    $fileName = strtolower($function['name']) . '.md';
    $slug     = '/ace/' . strtolower($function['name']);

    $content = "---
sidebar_position: 2   
title: {$function['name']}
slug: {$slug}
tags: [{$function['scope']}]
---
{$function['description']}\n";


    $content .= "### Syntax\n";
    foreach ($function['syntax'] as $syntax) {
        $content .= "
 ```yaml
{$syntax['syntax']}
```
    ";
        if (count($syntax['arguments']) > 0) {
            $content .= "
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
";
            foreach ($syntax['arguments'] as $argument) {
                $content .= "| ${argument['name']} | ${argument['type']} | ${argument['description']} |\n";
            }
        }
    }

    $content .= "
### Return values\n";
    $content .= $function['returnType'] . "\n\n";


    if (count($function['usages']) > 0) {
        $content .= "
### Usages      
";
        foreach ($function['usages'] as $usage) {
            $content .= "
```yaml
{$usage}
```    
";
        }
    }

    if (count($function['examples']) > 0) {
        $content .= "
### Examples      
";
        foreach ($function['examples'] as $usage) {
            $content .= "
```yaml
{$usage}
```    
";
        }
    }

    if (count($function['relatedFunctions']) > 0) {
        $content .= "
### Related functions      
";
        foreach ($function['relatedFunctions'] as $fn) {
            $s       = '/ace/' . strtolower($fn);
            $content .= "* [${fn}](${s})\n";
        }
    }
    file_put_contents(dirname(__FILE__) . '/docs/modeling/functions/' . $fileName, $content);
}


$fileName = 'index.md';
$content  = "---
sidebar_position: 2
title: Function List
---
";
$content  .= "
| Name        | Type | Description |
| ----------- | ---- | ----------- |     
";
foreach ($definition['functions'] as $function) {
    $link = '/ace/' . strtolower($function['name']);

    $content .= "| [${function['name']}](${link}) | ${function['scope']} | ${function['description']} |\n";
}

file_put_contents(dirname(__FILE__) . '/docs/modeling/functions/' . $fileName, $content);