@extends('layouts.master2')


@section('title','Home')

@section('body')


    
    <div class="textures_ovr">
     <div class="textures">
      <div class="news">
       <a href="http://www.textures.com/homeNews">
        <div class="n1" style="background:url('/system/newsPhoto/89/original.jpg') no-repeat center center">
         <div style="float:left;position:relative;width:100%;height:100%;">
          <div class="news_text">
           <div class="big_text">
            <strong>
             More Marble Textures!
            </strong>
           </div>
          </div>
          <div class="transition_background transition_background_override">
          </div>
          <div class="news_ribbon">
          </div>
         </div>
        </div>
       </a>
       <a class="featured_textures" href="http://www.textures.com/featuredNews/76" id="76">
        <div class="n2" style="background:url('/system/featuredPhotoGroup/76/original.jpg') no-repeat center center">
         <div style="float:left;position:relative;width:100%;height:100%;">
          <div class="news_text">
           <div class="big_text">
            <strong>
             Featured Textures
            </strong>
           </div>
          </div>
          <div class="transition_background transition_background_override">
          </div>
         </div>
        </div>
       </a>
       <div class="n3">
        <div style="float:left;position:relative;width:100%;height:100%;">
         <div id="freebieOfTheDayTexture" style="background-color:rgba(144,128,128,0.75);background-size: 100% !important; background-image:url('/system/gallery/photos/Ornaments/Moorish/Wood/94766/OrnamentsMoorishWood0076_350.jpg'); background-repeat:no-repeat; background-position:center;">
          <div class="news_text">
           <div class="big_text">
            <strong>
             Freebie of the Day
            </strong>
           </div>
          </div>
          <div class="transition_background transition_background_override">
          </div>
          <div class="buttons" id="freebieDownloadButton" style="display: none;">
           <button class="download">
            <img src="/images/download_icon.png">
             <a style="padding-left:10px">
              Download - 13.1 MB
             </a>
            </img>
           </button>
           <br>
            <a style="padding-right: 22px;display:block;margin-top:7px;color: #FFFFFF">
             (Downloading the Freebie will not use up any credits.)
            </a>
           </br>
          </div>
         </div>
        </div>
       </div>
       <a href="http://www.textures.com/download/3dscans0099/128388" id="randomTextureUrl" style="display:none;">
       </a>
       <div class="n4">
        <div style="float:left;position:relative;width:100%;height:100%;">
         <div id="randomTexture" style="background-color:rgba(208,208,208,0.75);background-size: auto 100% !important; background-image:url('/system/gallery/photos/3D Scans/126172/3DScans0099_41_350.jpg'); background-repeat:no-repeat; background-position:center;">
          <div class="news_text">
           <div class="big_text">
            <strong>
             Random Texture
            </strong>
           </div>
           <div class="transition_background transition_background_override">
           </div>
          </div>
         </div>
        </div>
       </div>
       <script>
        $(document).ready(function() {
                          /*  $('#randomTexture').click(function() {
                                if (!window.isDisableRandomPhotoSetButton) {
                                    window.location = $('#randomTextureUrl').attr('href');
                                }
                            }); */
                       
						
						
					//	alert("jiggar");


                        $.get("{{ URL::to('/student/read-data') }}",function(data){
                    
                           // alert(data);
                   // console.log(data);
                    //alert(data.tostring());
                    

                   // $.each(data, function(index,value){

					//	alert(value.CATEGORY);
                       
						var a ='  <div class="thumbnail">\
						<a class="thumbn_text" href="https://www.textures.com/browse/3d-brushes/114539">\
                        ' + value.CATEGORY +'\
						 </a>\
						<a href="https://www.textures.com/browse/3d-brushes/114539">\
						<div style="position:relative;width:100%;height:100%">\
						<img alt="3D Brushes" border="0" height="97" src="' + value.IMAGE_URL +'" width="97"/>\
						<div class="transition_background">\
						</div>\
						</div>\
						</a>\
						</div>\
						';
						
						$('#global').append(a);


                                          

                    });

              })

            });		
						
						
					


                        
       </script>
      </div>
      <div id="global" class="homepage_thumnails">
      
	   <!-- --------------------------------------------------------------------------------------------------  -->
       <div class="clear">
       </div>
      </div>
     </div>
    </div> 


@endsection