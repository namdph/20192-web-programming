<html>
    <head>
        <meta charset="UTF-8">
        <title>Page</title>
    </head>
    <body>
        <?php

        class Page {

            private string $page;
            private string $title;
            private int $year;
            private string $copyright;

            public function Page($title, $year, $copyright) {
                $this->page = '';
                $this->title = $title;
                $this->year = $year;
                $this->copyright = $copyright;
                $this->addHeader();
            }

            private function addHeader() {
                $this->page .= <<<HEAD
                    <html>
                        <head><title>$this->title</title></head>
                        <body>
                            <h1 align="center">$this->title</h1>
                    HEAD;
            }

            public function addContent($content) {
                $this->page .= $content;
            }

            private function addFooter() {
                $this->page .= <<<FOOT
                    <div align="center">&copy; $this->year $this->copyright</div>
                    </body>
                    </html>
                    FOOT;
            }

            public function get() {
                $pageWithoutFooter = $this->page;
                $this->addFooter();
                $page = $this->page;
                $this->page = $pageWithoutFooter;
                return $page;
            }

        }
        ?>
    </body>
</html>
