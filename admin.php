<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title></title>
    <style type="text/css">
        body { padding-bottom: 120px; }
        #form-wrapper { /*border:2px solid green;*/ width: 50%;margin: auto; }
        #subc1,#subc2,#subc3,#subc4,#subc5,#subc6,#subc7,#subc8 { display: none; }
        #form { display: inline-block; }
        #sub-label { margin-left: 40px; }
        #sub-btn {
/*            position: absolute;
            top: 706px;
            left: 407px;*/
            float: right;
            margin-top: 220px;
            margin-right: 165px;
        }

        #preview { margin-top: 20px; margin-left: 50px; display: inline-block;}
        #preview,#preview img { width:230px;height: 136px; }

        #btn-upload-image { display: none; }
        #choose-img { 
            border:1px solid black; 
            background-color: lightgrey;
            padding: 4px; 
            font-family: arial;
            font-size: 13px;
            position: relative;
            top:-179px;
        }
    </style>
</head>
<body>
<div id="form-wrapper" >

    <h1>Add a Product</h1>

    <form>
    <label>Category: </label>
    <select id="categories" >
        <option>Choose a Category</option>
        <option>FEATURED PRODUCT</option>
        <option>Digital Printing</option>
        <option>Screen Printing</option>
        <option>Laminates</option>
        <option>Offset Litho</option>
        <option>Display Products</option>
        <option>Flexible Pvc</option>
        <option>Thermal Transfer</option>
        <option>Digital Ink</option>
        <option>Plotter Films</option>
        <option>Sublimation</option>
        <option>Printer Parts</option>
        <option>Epson</option>
        <option>Printers</option>
    </select>

    <label id="sub-label" >Sub-Category: </label>
    <select id="subc1" class="sub" name="">
        <option>Select a Sub-Category</option>
        <option>Short-term Applications</option>
        <option>Electrostatic Vinyl</option>
        <option>Perforated Window Film</option>
        <option>Medium Term Applications</option>
        <option>Artist Canvas</option>
        <option>Long Term Applications</option>
        <option>Cast Vinyls</option>
        <option>Reflective Films</option>
        <option>Translucent Film</option>
        <option>Backlit Film</option>
        <option>Window Marking Films</option>
        <option>Digital Paper</option>
        <option>Wallcovering</option>
    </select>

    <select id="subc2" class="sub" name="">
        <option>Select a Sub-Category</option>
        <option>Economy Vinyls - Rolls</option>
        <option>Electrostatic Vinyl</option>                                                
        <option>Doming Polyesters</option>    
        <option>Intermediate Vinyl</option>
        <option>Unsupported PVC – 275 Micron (Table Cloth/File Covers)</option>
        <option>Economy Vinyls – Sheets</option>                                                
        <option>Cast Vinyl – Ultra Destructable</option> 
        <option>Promotional Polyester Films – Sheets PE Kraft Backing</option>
        <option>Doming Polyesters – Sheets Clear 100mic Pet Backing</option>    
    </select>

    <select id="subc3" class="sub" name="">
        <option>Select a Sub-Category</option>
        <option>Overlaminate Films</option>
        <option>Double Sided Adhesive Tapes</option>    
    </select>

    <select id="subc4" class="sub" name="">
        <option>Select a Sub-Category</option>
        <option>Paper Products</option>
        <option>Laminated Foils</option>                 
        <option>Vinyl Products</option>    
    </select>

    <select id="subc5" class="sub" name="">
        <option>Select a Sub-Category</option>
        <option>Frontlit - Lightweight - Suitable For Promotional Applications</option>
        <option>Frontlit - Heavyweight - Suitable For Banners And Billboards</option>
        <option>Blockout - Both Sides Smooth For Printing</option>    
        <option>Non Curl PVC - Suitable For Banners and Roll Up Display Units</option>
        <option>Backlit- Suitable For Exterior and Interior Lightboxes and Billboards</option>  
    </select>

    <select id="subc6" class="sub" name="">
        <option>Select a Sub-Category</option>
        <option>CAD Cut Films</option>
        <option>Siser Videoflex - PVC</option>
        <option>Siser PS Film - PU</option>    
        <option>Digital Pritable Film</option>    
    </select>

    <select id="subc7" class="sub" name="">
        <option>Select a Sub-Category</option>
       <option>Sunchemical Streamline Range</option>
    </select>

    <select id="subc8" class="sub" name="">
        <option>Select a Sub-Category</option>
        <option>Plotter Films</option>
        <option>Translucent Films</option>
        <option>Carbon Fibre Films</option>    
        <option>Window Marking Films</option>                                         
        <option>Wallart</option>                                         
        <option>Safety Films</option>                                         
        <option>Masking Films</option>                                         
        <option>Magnetic Sheeting</option>                                         
        <option>Transfer Tapes</option>                                         
        <option>Squeegees</option>   
    </select>

    <div>
    <br>
    <label>Title: </label><input type="text" name=""> 
    <p></p> 
    <p>Description</p>  
    <textarea name="" cols="60" rows="10"></textarea>   
    <p></p>
    <label>Price: </label><input type="text" name="">    
    </div>
    <p></p>

    <input id="sub-value" type="hidden" name="" value="" >
    <br>
    <input id="sub-btn" type="submit" name="Submit" value="Summit">
    </form>
    <p></p>

    
    <form id="form" method="post" action="upload.php" enctype="multipart/form-data" >
        <label id="choose-img" for="choose" >Choose Main Image</label><input id="choose" type="file" name="image" style="display: none;" onchange="autoImageUpload()">
        <input id="old-img" type="hidden" name="oldimage" value="">
        <input id="btn-upload-image" type="submit" value="Upload">
    </form>

    <div id="preview" ></div>

</div>



<script type="text/javascript">

$('#categories').change(function(){
    //alert($(this).val());
    if ( $(this).val() === "Digital Printing") { $(".sub").css("display","none");$("#subc1").css("display","inline-block"); }
    if ( $(this).val() === "Screen Printing") { $(".sub").css("display","none");$("#subc2").css("display","inline-block"); }
    if ( $(this).val() === "Laminates") { $(".sub").css("display","none");$("#subc3").css("display","inline-block"); }
    if ( $(this).val() === "Offset Litho") { $(".sub").css("display","none");$("#subc4").css("display","inline-block"); }
    if ( $(this).val() === "Flexible Pvc") { $(".sub").css("display","none");$("#subc5").css("display","inline-block"); }
    if ( $(this).val() === "Thermal Transfer") { $(".sub").css("display","none");$("#subc6").css("display","inline-block"); }
    if ( $(this).val() === "Digital Ink") { $(".sub").css("display","none");$("#subc7").css("display","inline-block"); }
    if ( $(this).val() === "Plotter Films") { $(".sub").css("display","none");$("#subc8").css("display","inline-block"); }

    if ( $(this).val() === "Display Products") { $(".sub").css("display","none"); }
    if ( $(this).val() === "Sublimation") { $(".sub").css("display","none"); }
    if ( $(this).val() === "Printer Parts") { $(".sub").css("display","none"); }
    if ( $(this).val() === "Epson") { $(".sub").css("display","none"); }
    if ( $(this).val() === "Printers") { $(".sub").css("display","none"); }
})

$('.sub').change(function(){
    //alert($(this).val());
    var subvalue = $(this).val();
    $("#sub-value").val(subvalue);
 })

// ------------------  Image Preview --------- //

function autoImageUpload() {
    $("#btn-upload-image").click();
}



$(document).ready(function (e) {
    $("#form").on('submit',(function(e) {
      
      e.preventDefault();
      $.ajax({
            url: "upload.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
                cache: false,
            processData:false,
            beforeSend: function() {
                $("#preview").html('<div>Image busy Uploading....</div><br><br><img src="balls.gif" />');
            },
            success: function(data) {
                // view uploaded file.
                $("#preview").html(data);

                //Used to delete a file that was accidently uploaded,the #img-name div comes upload.php file
                var oldimagefile = $("#img-name").html();
                //alert(oldimagefile);
                $("#old-img").val(oldimagefile);
            }
        });

    }));
});



</script>

</body>
</html>
