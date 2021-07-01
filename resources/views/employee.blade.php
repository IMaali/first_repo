<style media="screen">

.allBody{
  margin:0;
  padding:0;
  border:1mm solid blue;
  height:198mm;
  width:277mm;
  margin-top: 1%;
}
/* الحدود الكبيره للمربع الازرق*/
.border-pattern{
 position:absolute;
 left:4mm;
 top:-10mm;
 margin-top: 9.5%;
 height:190mm;
 width:267mm;
 border:1mm solid blue;
 /* http://www.heropatterns.com/ */
 background-color: #d6d6e4;
}
/* الحدود الصغيره للمربع الازرق*/
.content{
 position:absolute;
 left:10mm;
 top:10mm;
 height:170mm;
 width:245mm;
 border:1mm solid blue;
 background:white;
}
/* الحدود الي بأطراف الشهادة*/
.inner-content{
 border:1mm solid blue;
 margin:4mm;
 padding:10mm;
 height:140mm;
 text-align:center;
}
h1{
 text-transform:uppercase;
 font-size:48pt;
 margin-bottom:0;
}
/* الخط الازرق اللي تحت العنوان*/
h2{
 font-size:24pt;
 margin-top:0;
 padding-bottom:1mm;
 display:inline-block;
 border-bottom:1mm solid blue;
}
/* الخط الازرق اللي تحت العنوان*/
h2::after{
 content:"";
 display:block;
 padding-bottom:4mm;
 border-bottom:1mm solid blue;
}
h3{
 font-size:20pt;
 margin-bottom:0;
 margin-top:10mm;
}
p{
 font-size:16pt;
}
.bttn{
text-align: right;
}
</style>
<div class="bttn">
  <a href="{{ url('exportPDF') }}">Export</a>
</div>
<br><br>

<div class="allBody">
<div class="border-pattern">
 <div class="content">
  <div class="inner-content">
   <h1>Certificate</h1>
   <h2>of Excellence</h2>
   <h3>This Certificate Is Proudly Presented To</h3>
   <p>Jane Doe</p>
   <!-- <h3>Has Completed</h3>
   <p>PrintCSS Basics Course</p>
   <h3>On</h3>
   <p>Feburary 5, 2021</p>
   <div class="badge">
     <br> -->

   </div>
  </div>
 </div>
</div>
</div>
