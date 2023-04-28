
CREATE TABLE  `carts` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id_pro` INT,
  `id_cus` INT,
  `quantity` int ,
  `name` varchar(),
  `image` varchar(),
  `price` float(10, 2),


          FOREIGN KEY (`foreign_key`)
          REFERENCES `far_table` (`far_key`)
         
        
      FOREIGN KEY (`id_pro`)
      REFERENCES `products` (`id`)

      FOREIGN KEY (`id_cus`)
      REFERENCES `customers` (`id`)
   
) ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `cart_item` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id_cart` int , 
  `id_att` int ,

      FOREIGN KEY (`id_cart`)
      REFERENCES `carts` (`id`)

      
      FOREIGN KEY (`id_att`)
      REFERENCES `attributes` (`id`)
   
) ENGINE = InnoDB;











// Kiểm tra xem sản phẩm có trong giỏ hàng chưa
        $cart = Cart::where('cus_id', Auth::guard('cus')->user()->id)->where('pro_id', $product->id)->first();

        if ($cart) {
            // Lấy các mục giỏ hàng của giỏ hàng
            $cartItems = Cart::where('cus_id', Auth::guard('cus')->user()->id)->get();

            // Kiểm tra các mục giỏ hàng đã tồn tại trong giỏ hàng
            foreach ($cartItems as $cartItem) {  
                if ($cartItem->pro_id == $product->id) {
                    

                    // Lấy các thuộc tính của sản phẩm đã lưu trong giỏ hàng
                    $cartAttr = array_map('strval', $cartItem->cart_attr->pluck('id')->toArray());
                   

                    // Lấy các thuộc tính của sản phẩm được thêm vào giỏ hàng
                    $newAttrs = $request->attr_id;

                    // dd($newAttrs);

                    // So sánh các thuộc tính để xác định sản phẩm đã tồn tại trong giỏ hàng hay chưa

                    if ($cartAttr == $newAttrs) {
                        // Cập nhật số lượng sản phẩm trong giỏ hàng
                        $cartItem->quantity += $request->quantity;
                        $cartItem->total_price += $product->price * $request->quantity;
                        $cartItem->save();

                        return redirect()->route('cart.view')->with('success', 'Thêm sản phẩm vào giỏ hàng thành công!');
                    } else {
                        $cart = Cart::create([
                            'cus_id' => Auth::guard('cus')->user()->id,
                            'pro_id' => $product->id,
                            'name' => $product->name,
                            'image' => $product->image,
                            'price' => $product->price,
                            'quantity' => $request->quantity,
                            'total_price' => $product->price * $request->quantity,
                        ]);

                        // Lưu các thuộc tính của sản phẩm vào bảng cart_attrs
                        $cart_attrs = $request->attr_id;
                        foreach ($cart_attrs as $key => $value) {
                            CartAttr::create([
                                'cart_id' => $cart->id,
                                'attr_id' => $value,
                            ]);
                        }

                        return redirect()->route('cart.view')->with('yes', 'Thêm sản phẩm vào giỏ hàng thành công!');
                    }
                }
            }
        } else {
            // Tạo một mục giỏ hàng mới nếu sản phẩm chưa tồn tại trong giỏ hàng
            $cart = Cart::create([
                'cus_id' => Auth::guard('cus')->user()->id,
                'pro_id' => $product->id,
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->price,
                'quantity' => $request->quantity,
                'total_price' => $product->price * $request->quantity,
            ]);

            // Lưu các thuộc tính của sản phẩm vào bảng cart_attrs
            $cart_attrs = $request->attr_id;
            foreach ($cart_attrs as $key => $value) {

                CartAttr::create([
                    'cart_id' => $cart->id,
                    'attr_id' => $value,
                ]);
            }

            return redirect()->route('cart.view')->with('yes', 'Thêm sản phẩm vào giỏ hàng thành công!');
        }