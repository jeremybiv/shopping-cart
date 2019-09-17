@extends('layouts.front')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.cart.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">

            <?php         
                foreach(Cart::content() as $row) :?>
       		<tr>
           		<td>
               		<p><strong><?php echo $row->name; ?></strong></p>            		
                </td>
                   <td>$<?php echo $row->price; ?></td>
           		    <td><?php echo $row->qty; ?></td>
                       <td>$<?php echo $row->total(); ?></td>
                       
                       <td>
                               
                        <button class="btn btn-xs btn-primary removeCartItem" data-id="{{ $row->rowId }}" data-token="{{ csrf_token() }}"  >
                            {{ trans('global.delete') }}
                        </button>
                    </td>
               </tr>          

               <?php endforeach;?>
            <tfoot>
                
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td>Total</td>
                    <td>$<?php echo Cart::total(2); ?></td>
                </tr>
            </tfoot>
        </table>
        <br />
            <a style="margin-top:20px;" class="btn btn-default"  href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection

@section('scripts')
<script>

$(".removeCartItem").click(function(){
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

        $.ajax(
        {
            url: "/carts/remove/"+id,
            type: 'DELETE',
            data: {
                "row": id,
                "_method": 'DELETE',
                "_token": _token,
            },
            success: function (data) {
                location.reload()
            },
            error: function (ajaxContext) {
                console.log(ajaxContext.responseText);
            }    
        });
        
    });
</script>
@endsection