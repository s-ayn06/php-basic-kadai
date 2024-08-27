<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
     <?php
class Food {
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
    
    public function show_price() {
        return $this->price;
    }
}

class Animal {
    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
    
    public function show_height() {
        return $this->height;
    }
}

         ?>
     </p>
 </body>
 
 </html>
