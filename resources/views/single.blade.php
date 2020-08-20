
@extends('welcome1')
@section('operaciones')
 
 @foreach($lista as $indice =>$prod) 
    <div class="col-md-4 product-men mt-5">    
        <div class="men-pro-item simpleCart_shelfItem">                
            <div class="men-thumb-item text-center">
                <img src="{{$prod->detalles->fotos[0] ?? 'images/m1.jpg'}}" width="160px" alt="">            
                <div class="row">
                <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                        <a href="/venta" class="link-product-add-cart">Ver</a>
                    </div>
                </div>
               </div>
            <div class="item-info-product text-center border-top mt-4">
                <h4 class="pt-1">
                    <a href="/producto">{{$prod->detalles->nombre ?? ''}}</a>
                </h4>
                <h4 class="pt-1">
                    <a href="/venta">Fabricante: {{$prod->detalles->fabricantes->nombre ?? ''}}</a>
                </h4>
                <div class="info-product-price my-2">
                    <span class="item_price">{{$prod->precio}}</span>
                    <del>$280.00</del>
                </div>
                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="#" method="post">
                        <fieldset>
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="add" value="1" />
                            <input type="hidden" name="business" value=" " />
                            <input type="hidden" name="item_name" value="Tren Delantero" />
                            <input type="hidden" name="amount" value="200.00" />
                            <input type="hidden" name="discount_amount" value="1.00" />
                            <input type="hidden" name="currency_code" value="USD" />
                            <input type="hidden" name="return" value=" " />
                            <input type="hidden" name="cancel_return" value=" " />
                            <input type="submit" name="submit" value="Añadir al Carrito" class="button btn" />
                        </fieldset>
                    </form>
                </div>
                
                </div>
                
            </div>
            
        </div>

    </div>
@endforeach

<div class="row">
      <div class="mx-auto">
          {{ $lista->links( '' ) }}
      </div>
</div>  
@endsection