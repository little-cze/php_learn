<?php

///$_GET
    ///在 HTML 表单中使用 method="get" 时，所有的变量名和值都会显示在 URL 中。HTTP GET 方法不适合大型的变量值。它的值是不能超过 2000 个字符的。
//     从带有 POST 方法的表单发送的信息，对任何人都是不可见的（不会显示在浏览器的地址栏），并且对发送信息的量也没有限制。

///$_POST
// 注释：然而，默认情况下，POST 方法的发送信息的量最大值为 8 MB（可通过设置 php.ini 文件中的 post_max_size 进行更改）。