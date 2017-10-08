@extends('layouts.master2')


@section('title','3d-brushes')

@section('body')





<script language="javascript">



	$(document).ready(function() {
		/*gallery = new Gallery('gallery', userAccountType);
		gallery.init(totalPhotos, initialPhotoDataJSON);*/

                alert('hello');

              

              $.get("{{ URL::to('/student/read-data') }}",function(data){
                    
                   // console.log(data);
                    //alert(data.tostring());
                    

                    $.each(data, function(index,value){

                          //  alert("success");
                            alert(value.CATEGORY);
                            alert(value.ID);
                            alert(value.IMAGE_URL);


                         /*   var tr = $("</tr>");
                            tr.append($("<td/",{
                                    text: value.CATEGORY;
                            })) */

                            var a = 6;

                          /*  var tr ='  <div style="background-color: red;" >' + a + '<div>\
                             ';*/


                             var att = ' <img src="' + value.IMAGE_URL +' " alt="Smiley face" height="100%" width="100%">\
                             ';

                            $('#imago').append(att);

                       /*     var a = '<img style="height:70%; max-height:70%; max-width:100%; width:100%; align="middle";"  src="' + value.IMAGE_URL + '" alt="">\
						</div>\';

                        $('#imago').append(a);*/
                  

                    });

              })


            


            /*    $.ajax({

                   


                   
               /* method:'get',
               type:"GET",
               url:'./3d-brushes',
                dataType:'Json',
              
                url: './3d-brushes',
                method: 'get',
                contentType: "application/json",
                //   data: '{x:"' + x+ '"}'
                dataType: "json",
                success: function (data) {
                    var myItems = data.d;
                    //
                    var counter = 0;

                    alert("janiiiii");

                    
                },
                error: function (err) {
                    var qq = JSON.stringify(err);
                    alert(qq);
                    alert('hellomoto');

                }



        }); */
      
     /*   $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        
    });
    jQuery.ajax({
        url:'/3d-brushes',
        type: 'get',
        cache:false,
        data: data,
         
        success: function( response ){
            alert("hello jiggar");
            alert(data);
        },
        error: function (response) {
            alert("Error" + response);
        }
    }); */

  /*  $.get("{{  URL::to('3d-brushes')  }}",function(data){


        $.each(data,function(i,value)){

                alert(value.category);
                alert(value.image_url);

        });
    })*/
    

	}); 
	
	/*function categoryHideShowCallback(sideCategoriesVisible, hidden) {
		gallery.reloadGallery(hidden);
	}*/
    </script>
    <input id="browseCategoryId" type="hidden" value="114539">
     <div class="textures_ovr">
      <div class="textures">
       <div class="content_padding">
        <div class="breadcrumbs">
         <p>
          <a href="http://www.textures.com">
           Textures
          </a>
          ›
          <strong>
           3D Brushes
          </strong>
         </p>
        </div>
        <div class="title" style="height: auto;">
         <div class="browse-header">
          <h1>
           ZBrush and Mudbox Sculpting Brushes / Alphas
          </h1>
          <div class="seamless" style="margin-top: -22px;">
           <a id="showSeamlessText" style="color:#ffffff">
           </a>
          </div>
         </div>
         <div style="margin-top:10px">
         </div>
         <div style="width: 38px; float:left">
          <img alt=" " height="38" src="/images/exclamation-icon-substance.png" width="38">
          </img>
         </div>
         <div style="width: calc(100% - 48px);float:left;margin-left: 10px; margin-bottom: 10px">
          <p class="subcategories" style="height: 38px; vertical-align: middle;display: table-cell">
           <span style="padding: 0;">
            This category is open for paid contributions. Can you make 3D sculpting brushes and are you looking for remote work? Email us at
            <a href="mailto:support@textures.com?subject=3D%20Designer%20Artist" style="color:#2679cd">
             support@textures.com
            </a>
            for more information.
           </span>
          </p>
         </div>
         <div style="clear: both">
         </div>
         <p class="subcategories">
          <span id="loadedCountDiv">
           0
          </span>
          of 61 photosets
         </p>
        </div>
        <div class="justifiedGallery" id="gallery">
        </div>
        <div id="showmore-container">
         <a class="showmore" href="javascript:;">
          <button>
           Show More Results
          </button>
         </a>
        </div>
        <div id="browseLoader">
         <img src="/images/loading.gif"/>
        </div>
       </div>
      </div>
     </div>
     <noscript>
      <div class="noscript-error" style="margin-left: 252px;">
       <span style="color: red">
        Error:
       </span>
       Javascript is disabled. Please enable Javascript to use our website.
      </div>
     </noscript>
     <script>
      var seamless = 0;
	$(document).ready(function() {
		var seamlessText = $('#showSeamlessText');
		var url = window.location.href.split('?');
		url = url[0];

		if (seamless) {
			seamlessText.html("Show All Textures");
			seamlessText.prop("href",url);
		} else {
			seamlessText.html("Show Seamless Textures Only");
			seamlessText.prop("href", url + "?seamless=1");
		}
	})
     </script>
     <script language="javascript" src="/javascripts/gallery-v7.js?v=2017100111">
     </script>


     <div id="hello">
           <h1 div="titles">Jiggar</h1>

           <div id="imago" style="background-color: lightgrey;
    width: 500px;
    height:300px;
    border: 25px solid green;
    padding: 25px;
    margin: 25px; margin-left:40%">

            
           </div>

           
     </div>



@endsection