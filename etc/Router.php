<?php
/*
 *   Created on Tue Oct 31 2023
 *   Copyright (c) 2023 BitsHost
 *   All rights reserved.
 *
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *   of this software and associated documentation files (the "Software"), to deal
 *   in the Software without restriction, including without limitation the rights
 *   to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *   copies of the Software, and to permit persons to whom the Software is
 *   furnished to do so, subject to the following conditions:
 *
 *   The above copyright notice and this permission notice shall be included in all
 *   copies or substantial portions of the Software.
 *
 *   THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *   IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *   FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *   AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *   LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *   OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *   SOFTWARE.
 *   Here you may host your app for free:
 *   https://bitshost.biz/
 */

namespace upMVC;

/**
 * Router
 */
class Router
{
    protected $routes = [];

    public function addRoute($route, $className, $methodName)
    {
        $this->routes[$route] = ['className' => $className, 'methodName' => $methodName];
    }

    public function dispatcher($reqRoute, $reqMet)
    {
        if (array_key_exists($reqRoute, $this->routes)) {
            $className = $this->routes[$reqRoute]['className'];
            $methodName = $this->routes[$reqRoute]['methodName'];
            $this->callController($className, $methodName, $reqRoute, $reqMet);
        } else {
            $this->handle404($reqRoute);
        }
    }

    private function callController($className, $methodName, $reqRoute, $reqMet)
    {
        $this->beforeMiddleware();
        $controller = new $className();
        $controller->$methodName($reqRoute, $reqMet);
        $this->afterMiddleware();
    }

    private function beforeMiddleware()
    {
        // Implement your before middleware logic here
    }

    private function afterMiddleware()
    {
        // Implement your after middleware logic here
    }

    private function handle404($reqRoute)
    {
        ?>
        <meta http-equiv="refresh" content="3; URL='<?php echo BASE_URL ?>'" />
        <?php
        include_once './common/404.php';
    }
}
