<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class Page {

            private string $page;
            private string $title;
            private int $year;
            private string $copyright;

            private function addHeader() {
                return $this->page;
            }

            public function addContent($content) {
                $this->content = $content;
            }

            private function addFooter() {
                return $this->year;
            }

            public function get() {
                return $this;
            }

        }
        ?>
    </body>
</html>
