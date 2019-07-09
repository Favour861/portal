
	function selection() {

		if(document.getElementById('faculty').value=="Select"){
			document.getElementById('department').innerHTML ="<option>Select</option>";
		}
		if(document.getElementById('faculty').value=="Faculty of Agric"){
			document.getElementById('department').innerHTML ="<option>Department of Agricultural Economics</option><option>Department of Animal Production and Health</option><option>Department of Agricultural Extention and rural development</option><option>Department of Animal Nutrition and Biotechnology</option><option>Department of Crop and Environmental Protection</option><option>Department of Crop Production and Soil science</option>";
		}if(document.getElementById('faculty').value=="Faculty of Engineering"){
			document.getElementById('department').innerHTML="<option>Computer Science and Engineering</option><option>Electronics and Electrical Engineering</option><option>Mechanical Engineering</option><option>Civil Engineering</option><option>Chemical Engineering</option><option>Food Science and Engineering</option><option>Agricultural Engineering</option>"
		}if(document.getElementById('faculty').value=="Faculty of Pure and Applied Sciences"){
			document.getElementById('department').innerHTML="<option>Pure and Applied Biology</option><option>Pure and Applied Chemistry</option><option>Pure and Applied Mathematics</option><option>Pure and Applied Physics</option><option>Statistics</option><option>Science and Laboratory Technology</option>"
		}
	}
	$(document).ready(function(){
			$("#toggler").click(function(){
				// if(toggler.innerHTML=="X"){
				// 	toggler.innerHTML="&#8801;";
				// }else if(toggler.innerHTML=="&#8801;"){
				// 	toggler.innerHTML="X";
				// }
				$("#sb").slideToggle(200);
			});
		});