<script>
  var Hdev;

async function getDevice() {
  console.log('Inside of myfunction');
    try {
	      const devices = await navigator.hid.requestDevice({
	        filters: [
	          {
	            vendorId: 0x0fd9,
	            productId: 0x006c
	          },
	        ],
	      });
	      Hdev = devices[0];
	    } catch (error) {
	      console.log("An error occurred.");
	    }

	    if (!Hdev) {
	      console.log("No device was selected.");
	    } else {
	      console.log(`HID: ${Hdev.productName}`);
	      await Hdev.open();
	    }
    
	Hdev.addEventListener("inputreport", event => {
		//	console.log("event");
		  const { data, Hdev, reportId } = event;
		  //console.log(event.device.productName + ": got input report " + event.reportId);
		  //console.log(new Uint8Array(event.data.buffer));
		  
		for (let i = 1; i < 33; i++) {
			let j = i + 2;
			if(data.getUint8(j)==1)
			  {
			  	//key down 
			  	//console.log("button"+i);
			  	KeyDown("button-"+i);
			  }  
			if(data.getUint8(j)==0)
			  {
			  	//key up 
			  	//console.log("button"+i);
			  	KeyUp("button-"+i);
			  } 
			}
		}
	);
}

function KeyDown(buttonId)
{
	document.getElementById(buttonId).style.backgroundColor = "red";
}

function KeyUp(buttonId)
{
	document.getElementById(buttonId).style.backgroundColor = "grey";
}
</script>


<button onclick='getDevice();'> Click</button><br>


<?php
/*
for ($i=1;$i<=32;$i++)
{
	echo "<div id='button-$i'
		style='width: 100px;
	    border: solid;
	    border-width: 1px;
	    height: 100px;
	    background-color: grey;
	    display: inline-block;'
	    onClick='changeCol(\"button-$i\");'
	    > $i </div>";
}
*/
?>


<body><button onclick="getDevice();"> Click</button><br>


<div id="button-1" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-1&quot;);"> 1 </div>
<div id="button-2" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-2&quot;);"> 2 </div>
<div id="button-3" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-3&quot;);"> 3 </div>
<div id="button-4" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-4&quot;);"> 4 </div>
<div id="button-5" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-5&quot;);"> 5 </div>
<div id="button-6" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-6&quot;);"> 6 </div>
<div id="button-7" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-7&quot;);"> 7 </div>
<div id="button-8" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-8&quot;);"> 8 </div>
<div id="button-9" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-9&quot;);"> 9 </div>
<div id="button-10" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-10&quot;);"> 10 </div>
<div id="button-11" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-11&quot;);"> 11 </div>
<div id="button-12" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-12&quot;);"> 12 </div>
<div id="button-13" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-13&quot;);"> 13 </div>
<div id="button-14" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-14&quot;);"> 14 </div>
<div id="button-15" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-15&quot;);"> 15 </div>
<div id="button-16" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-16&quot;);"> 16 </div>
<div id="button-17" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-17&quot;);"> 17 </div>
<div id="button-18" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-18&quot;);"> 18 </div>
<div id="button-19" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-19&quot;);"> 19 </div>
<div id="button-20" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-20&quot;);"> 20 </div>
<div id="button-21" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-21&quot;);"> 21 </div>
<div id="button-22" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-22&quot;);"> 22 </div>
<div id="button-23" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-23&quot;);"> 23 </div>
<div id="button-24" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-24&quot;);"> 24 </div>
<div id="button-25" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-25&quot;);"> 25 </div>
<div id="button-26" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-26&quot;);"> 26 </div>
<div id="button-27" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-27&quot;);"> 27 </div>
<div id="button-28" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-28&quot;);"> 28 </div>
<div id="button-29" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-29&quot;);"> 29 </div>
<div id="button-30" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-30&quot;);"> 30 </div>
<div id="button-31" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-31&quot;);"> 31 </div>
<div id="button-32" style="width: 100px; border: 1px solid; height: 100px; background-color: grey; display: inline-block;" onclick="changeCol(&quot;button-32&quot;);"> 32 </div>



