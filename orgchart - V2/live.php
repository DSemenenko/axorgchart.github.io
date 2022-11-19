<title>Company Org Chart</title>
<?
$data_it=GetTeamMembers(16542);
$data_marketing=GetTeamMembers(7);
$data_dmitri=GetTeamMembers(109);
$data_exdev=GetTeamMembers(121747);
$data_fadi=GetTeamMembers(695);
$data_hassan=GetTeamMembers(513);
$data_raza=GetTeamMembers(420);
$data_simon=GetTeamMembers(92265);
$data_admins=GetTeamMembers(71365);
$data_finance=GetTeamMembersF(26397);
$data_axdesign=GetTeamMembers(79600);
$data_chinese=GetTeamMembers(634);
$data_creative=GetTeamMembers(92860);
$data_office=GetTeamMembers(80554);
$data_pm=GetTeamMembers(23344);
$data_maksim=GetTeamMembers(556);
$data_malik=GetTeamMembers(519);
$data_callum=GetTeamMembers(53571);
$data_belinda=GetTeamMembers(76298);
$data_jamaul=GetTeamMembers(32629);
$data_nigel=GetTeamMembers(62522);
$data_james=GetTeamMembers(30931);
$data_simon=GetTeamMembers(92265);
$data_drivers=GetTeamMembers(46294);
//---custom_functions
$data_ben=GetTeamMembersBen();
$data_chris=GetTeamMembersChris();
$data_cc=GetTeamMembersCC();
$data_convey=GetTeamMembersConvey();
$data_hr=GetTeamMembersHR();
$data_rec=GetTeamMembersRecruitment();
$data_st=GetTeamMembersST();
$data_media=GetTeamMembersMedia();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Company Org Chart</title>


	<!--fontawesome-->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!--bootstrap 4-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.20/datatables.min.css"/>

	<link rel="stylesheet" href="css/index.css?a=<?=rand()?>">
	<script src="js/orgchart.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script src="js/easyload.min.js"></script>
</head>
<body>
	<!-- <div class="easyload">-->
	<div style="width:100%; height:1024;" id="tree"/>
<!-- </div>-->
<script>
 window.onload = function () {
	 /*OrgChart.templates.group.link = '<path stroke-linejoin="round" stroke="#aeaeae" stroke-width="1px" fill="none" d="M{xa},{ya} {xb},{yb} {xc},{yc} L{xd},{yd}" />';
            OrgChart.templates.group.nodeMenuButton = '';
            OrgChart.templates.group.min = Object.assign({}, OrgChart.templates.group);
            OrgChart.templates.group.min.imgs = "{val}";
            OrgChart.templates.group.min.img_0 = "";
            OrgChart.templates.group.min.description = '<text data-width="230" data-text-overflow="multiline" style="font-size: 14px;" fill="#aeaeae" x="125" y="100" text-anchor="middle">{val}</text>';
*/			



            var chart = new OrgChart(document.getElementById("tree"), {
				lazyLoading: true,
                template: "olivia",
				//enableDragDrop: true,
				//nodeMouseClick: OrgChart.action.edit,
				//nodeMenu: {
				//     details: { text: "Details" },
                        //edit: { text: "Edit" },
                    // add: { text: "Add" },
                    // remove: { text: "Remove" }
				//},
				//filterBy: ['Departments'],
				//layout: OrgChart.mixed,
                editForm: {readOnly: true},
                dragDropMenu: {
                    addInGroup: { text: "Add in group" },
                    addAsChild: { text: "Add as child" }
                },
                nodeBinding: {
					//imgs: "img",
					img_0: "img",
                    description: "description",
                    field_0: "name",
					field_4: "Departments",
                    field_1: "title",
					field_2: "email",
					field_3: "phone"

                },
				/*clinks: [
                    { from: 92860, to: 2},
				],*/
                collapse: {
                    level: 2, 
 					allChildren: true
                },
                tags: {
                    "group": {
                        template: "group",
                    },
                    "devs-group": {
                        //min: true,   /* групировка элемента */
                        subTreeConfig: {
                            columns: 2
                        }
                    },
                    "marketing-group": {
                       // min: true,   /* групировка элемента */
                        subTreeConfig: {
                            columns: 2
                        }
                    },
                    "offplan-group": {
                       // min: true,   /* групировка элемента */
                        subTreeConfig: {
                            columns: 5
                        }
                    },
                    "admin-group": {
                        //min: true,   /* групировка элемента */
                        subTreeConfig: {
                            columns: 2
                        }
                    },
                    "axdesign-group": {
                        //min: true,
                        subTreeConfig: {
                            columns: 2
                        }
                    },
                    "сhinese-group": {
                        //min: true,
                        subTreeConfig: {
                            columns: 2
                        }
                    },
                    "finance-group": {
                       // min: true,
                        subTreeConfig: {
                            columns: 2
                        }
                    },
					"drivers-group": {
						subTreeConfig: {
							columns: 2
						}
					},
                    "hr-group":{
                        //min: true,
                        subTreeConfig: {
                            columns: 2
                        }
                    },
                    "office-group": {
                        //min: true,
                        subTreeConfig: {
                            columns: 3
                        }
                    },
                    "propertymanagement-group": {
                       // min: true,
                        subTreeConfig: {
                            columns: 2
                        }
                    },
                    "secondary-group": {
                       // min: true,
                        subTreeConfig: {
                            columns: 3
                        }
                    },
					"secondary-group-1": {
                       // min: true,
                        subTreeConfig: {
                            columns: 1
                        }
                    },
					"secondary-group-2": {
						// min: true,
                        subTreeConfig: {
                            columns: 1
                        }
					},
                    "hrs-group": {
                        //min: true,
                        subTreeConfig: {
                            columns: 2
                        }
                    },
					"creative-group": {
                        //min: true,
                        subTreeConfig: {
                            columns: 2
                        }
                    }, 
					//levels
					"subLevels0": {
                        subLevels: 0
                    },
                    "subLevels1": {
                        subLevels: 1
                    },
                    "subLevels2": {
                        subLevels: 2
                    },
                    "subLevels3": {
                        subLevels: 3
                    },
                },
				menu: {
					pdf: { text: "Export PDF" },
					png: { text: "Export PNG" },
					svg: { text: "Export SVG" }
				},
				nodeMenu: {
					pdf: { text: "Export PDF" },
					png: { text: "Export PNG" },
					svg: { text: "Export SVG" }
				},
            });

            chart.on('drop', function (sender, draggedNodeId, droppedNodeId) {
                var draggedNode = sender.getNode(draggedNodeId);
                var droppedNode = sender.getNode(droppedNodeId);

                if (droppedNode.tags.indexOf("group") != -1 && draggedNode.tags.indexOf("group") == -1) {
                    var draggedNodeData = sender.get(draggedNode.id);
                    draggedNodeData.pid = null;
                    draggedNodeData.stpid = droppedNode.id;
                    sender.updateNode(draggedNodeData);
                    return false;
                }
            });

	 /* chart.on('click', function (sender, args) {
                if (args.node.tags.indexOf("group") != -1) {
                    if (args.node.min) {
                        sender.maximize(args.node.id);
                    }
                    else {
                        sender.minimize(args.node.id);
                    }
                }
                return false;
            });
*/
            chart.on('field', function(sender, args){    
                if (args.node.min) {
                  if (args.name == "img") {
                    var count = args.node.stChildrenIds.length > 5 ? 5 : args.node.stChildrenIds.length;
                    var x = args.node.w / 2 - (count * 32) / 2;
                    for (var i = 0; i < count; i++) {
                        var data = sender.get(args.node.stChildrenIds[i]);
                        args.value += '<image xlink:href="' + data.img + '" x="' + (x + i * 32) + '" y="45" width="32" height="32" ></image>';
                    }
                  }                     
              }     
            });

            chart.load([

                /* GROUPS */
                { id: "directors", name: "Founders", tags: ["directors-group", "group"], description: "Founders" },
                { id: "g16542", name: "IT Department", pid: 16542, tags: ["devs-group", "group"], description: "IT Department" },
                { id: "g7", name: "Marketing Department", pid: 7, tags: ["marketing-group", "group"], description: "Marketing Department" },
				{ id: "g121747", name: "Exclusive Developments", pid: 121747, tags: ["offplan-group", "group"], description: "Exclusive Developments" }, /*Leader of department*/
                { id: "g109", name: "Off-plan Sales Team", pid: 109, tags: ["offplan-group", "group", "subLevels1"], description: "Off-plan Sales Team - Dimitry" }, /*Leader of department*/
				/*{ id: "g695", name: "Off-plan Sales Team", pid: 695, tags: ["offplan-group", "group", "subLevels1"], description: "Off-plan Sales Team - Fadi" }, */ /*Leader of department*/ 
                { id: "g513", name: "Off-plan Sales Team", pid: 513, tags: ["offplan-group", "group"], description: "Off-plan Sales Team - Hassan" }, /*Leader of department*/ 
                { id: "g420", name: "Off-plan Sales Team", pid: 420, tags: ["offplan-group", "group", "subLevels1"], description: "Off-plan Sales Team - Raza" }, /*Leader of department*/ 

				{ id: "g92265", name: "Off-plan Sales Team", pid: 92265, tags: ["offplan-group", "group", "subLevels1"], description: "Off-plan Sales Team - Simon" }, /*Leader of department*/
				{ id: "g71365", name: "Admins Team", pid: 71365, tags: ["admin-group", "group"], description: "OffPlan/Secondary Admins" },  
				//{ id: "secadmin", name: "Admins", pid: 19159, tags: ["admin-group", "group"], description: "Secondary Admins" },  
                { id: "g79600", name: "Axdesign", pid: 79600, tags: ["axdesign-group", "group"], description: "AX Design" }, 
                { id: "g634", name: "Chinese Team", pid: 634, tags: ["сhinese-group", "group"], description: "Chinese Team" },  
                { id: "g26397", name: "Finance", pid: 26397, tags: ["finance-group", "group"], description: "Finance" },   
				{ id: "g46294", name: "Drivers team", pid: 26397, tags: ["drivers-group", "group"], description: "Drivers" },    
                { id: "hrrecruitment", name: "Recruitment", pid: 19185, tags: ["hr-group", "group"], description: "Recruitment" },  
                { id: "g30931", name: "Learning & Development", pid: 30931, tags: ["hr-group", "group"], description: "Learning & Development" },  
				{ id: "hrhr", name: "HR", pid: 19185, tags: ["hr-group", "group"], description: "HR" },
				/*{ id: "backoffice", name: "Back Office", pid: 80554, tags: ["office-group", "group"], description: "Back Office" },  */
                { id: "g80554", name: "Front Office", pid: 80554, tags: ["office-group", "group"], description: "Front office" },    
                { id: "g23344", name: "Property Management", pid: 23344, tags: ["propertymanagement-group", "group"], description: "Property Management" }, 
                { id: "g1034", name: "Secondary Sales Team - Ben", pid: 1034, tags: ["secondary-group", "group"], description: "Ben Team Secondary" }, /*Leader of department*/
				{ id: "g556", name: "Secondary Sales Team - Maksim", pid: 556, tags: ["secondary-group", "group"], description: "Secondary Sales Team - Maksim" }, /*Leader of department*/
				{ id: "g519", name: "Secondary Sales Team - Malik", pid: 519, tags: ["secondary-group", "group"], description: "Secondary Sales Team - Malik" }, /*Leader of department*/
                { id: "callcentersecond", name: "Call Center", pid: 83491, tags: ["secondary-group-1", "group"], description: "Call Center" }, /*Leader of department*/
				{ id: "mediasecond", name: "Media Team", pid: 83491, tags: ["secondary-group-2", "group"], description: "Media Team" }, /*Leader of department*/
				//{ id: "g48559", name: "Secondary Chris Team", pid: 48559, tags: ["secondary-group", "group"], description: "Chris Team Secondary" }, /*Leader of department*/
				{ id: "g53571", name: "Secondary Sales Team - Callum", pid: 53571, tags: ["secondary-group", "group"], description: "Secondary Sales Team - Callum" }, /*Leader of department*/
                { id: "conveyancing", name: "Conveyancing", pid: 83491, tags: ["secondary-group-1", "group"], description: "Conveyancing" }, /*Leader of department*/
				{ id: "shortterm", name: "Short Term Let", pid: 83491, tags: ["secondary-group-1", "group"], description: "Short Term Let" }, /*Leader of department*/
                { id: "g76298", name: "Secondary Sales Team - Belinda", pid: 76298, tags: ["secondary-group", "group"], description: "Secondary Sales Team - Belinda" }, /*Leader of department*/
				{ id: "g32629", name: "Secondary Sales Team - Jamaul", pid: 32629, tags: ["secondary-group", "group"], description: "Secondary Sales Team - Jamaul" }, /*Leader of department*/
				{ id: "g62522", name: "Secondary Sales Team - Nigel", pid: 62522, tags: ["secondary-group", "group"], description: "Secondary Sales Team - Nigel" }, /*Leader of department*/
				//{ id: "secondarybelinda", name: "Secondary Belinda Team", pid: 76298, tags: ["secondary-group", "group"], description: "Belinda Team Secondary" }, /*Leader of department*/
				//{ id: "secondaryrobert", name: "Secondary Jamaul Team", pid: 32629, tags: ["secondary-group", "group"], description: "Jamaul Team Secondary" }, /*Leader of department*/
				//{ id: "secondaryrobert", name: "Secondary Nigel Team", pid: 62522, tags: ["secondary-group", "group"], description: "Nigel Team Secondary" }, /*Leader of department*/
				{ id: "g92860", name: "Creative Department", pid: 92860, tags: ["creative-group", "group"], description: "Creative Department Team" }, /*Leader of department*/
				//{ id: "corporate", pid: 58677, name: "Corporate Team", tags: ["hrs-group", "group"], description: "Corporate" },



                /* GROUPS END*/

                /*GM*/
                { id: 1, stpid: "directors", name: "Denis", title: "CEO", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/main/23d/23d3873e568fbf887d5923df93edd7f0/1651825373621.jpg" },
                { id: 2, stpid: "directors", name: "Victoria Shabalina", title: "COO", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/main/a3c/a3cfb15723cb7eca85c866c1307527cc/IMG_9353_s.JPG" },


                /* Merketing */

				{ id: 7, pid: "directors", name: "Tosin Onadeko", phone: "+971554845681", email: "cmo@axcapital.ae",  title: "CMO", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/405640/23365dd92c1f65a6eb81283cfddb6812/main/a6d/a6d5a2435aa649389317de804a9263ec/photo_2022-06-04+14.07.44.jpeg" },
				<? echo $data_marketing; ?>
                /* Merketing END*/
/* IT */
				//
				{ id: 16542, pid: "directors", name: "Otabek Navruzov", phone: "+971521569330", email: "cto@axcapital.ae", Departments: "IT", tags: ["subLevels1"], title: "CTO", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/435133/23365dd92c1f65a6eb81283cfddb6812/main/928/9289371f36833dbb040e0faf4b7b4db1/photo_2022-02-23_10-58-47.jpg" },
                <? echo $data_it; ?>
                /* IT end */

                /*Off plan TEAM*/

                    { id: 666, pid: "directors", name: "Hisham El Assaad", phone: "+971521790706", email: "h.elassaad@axcapital.ae", title: "Head of Offplan Division", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/main/3c0/3c0990e55308cd1e3e92d415b43d4ab9/Hisham.jpg"},

                            /* 1 Section Exclusive Offplan */
                            { id: 121747, pid: 666, name: "", phone: "", email: "", title: "Head of Exclusive Developments", img: ""},
							<? echo $data_exdev; ?>
                            /* 2 Section Dimitri */
                            { id: 109, pid: 666, name: "Dimitry Zolotco", phone: "+971525545794", email: "dmitri.zolotco@axcapital.ae", title: "Senior Sales Manager", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/199291/23365dd92c1f65a6eb81283cfddb6812/main/fef/fef29990884ba97ce63eaf468d1dfc5e/dmitriu.jpg"},
							<? echo $data_dmitri; ?>

                                /* 3 Fadi*/
					   /*{ id: 695, pid: 666, name: "Fadi Hija", phone: "+971559013738", email: "f.hija@axcapital.ae", title: "Senior Sales Manager", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/370630/23365dd92c1f65a6eb81283cfddb6812/main/7b9/7b9d5e9282316e2b019b2cf88e007fe5/photo_2022-02-17_17-17-43.jpg"},
<? echo $data_fadi; ?>*/

                            /**/

                            /* 4 Section Hassan Offplan */
                            { id: 513, pid: 666, name: "Hassan Kiani", phone: "+971528777286", email: "hassan.kiani@axcapital.ae", title: "Senior Sales Manager", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/428538/23365dd92c1f65a6eb81283cfddb6812/main/b5b/b5bc127b3cd6fda6770fa7a807935d9d/photo_2022-06-20_15-10-01.jpg"},
							<? echo $data_hassan; ?>
                            /**/
                            /* 5 Section Raza Offplan */
                            { id: 420, pid: 666, name: "Raza Mujtaba", phone: "+971527341839", email: "raza.mujtaba@axcapital.ae", title: "Senior Sales Manager", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/373457/23365dd92c1f65a6eb81283cfddb6812/main/d5d/d5dfa29c98f2d4fe1e1a218a3575a570/RAZA+PIC+LATEST.jpeg"},
							<? echo $data_raza; ?>

                            /**/
							/* 6 Section Simon Offplan */
                            { id: 92265, pid: 666, name: "Simon Quinton", phone: "+971586423755", email: "s.quinton@axcapital.ae", title: "Senior Sales Manager", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/main/7eb/7ebc7af23dd6847a8d2988612ba61c62/photo_2022-08-29_15-46-00.jpg"},
							<? echo $data_simon; ?>

                            /**/

                /*Off plan TEAM end*/


                /*Admin TEAM*/

                    { id: 71365, pid: "directors", name: "Liezel Gapunuan", phone: "", email: "l.gapunuan@axcapital.ae", tags: ["subLevels1"], title: "Head of Admins Team", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/main/e29/e297b6e409411362812b7778feccf0df/photo_2022-09-13_09-39-09.jpg"},
					<? echo $data_admins; ?>


                /*Admin TEAM END*/


                 /*axdesign TEAM*/
                { id: 79600, pid: "directors", name: "Dmitrii Bogaci", phone: "", email: "dmitrii.bogaci@axdesign.ae", title: "Head of AX DESIGN", img: "https://i.pinimg.com/280x280_RS/2e/45/66/2e4566fd829bcf9eb11ccdb5f252b02f.jpg"},
                <? echo $data_axdesign; ?>
                /*axdesign TEAM END*/

                /*сhinese TEAM*/
                { id: 634, pid: "directors", name: "Lyla Zhanglu", phone: "+971521929624", email: "l.zhanglu@axcapital.ae", tags: ["subLevels1"], title: "Senior Sales Manager", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/259579/23365dd92c1f65a6eb81283cfddb6812/main/7f5/7f5e76c9cf3a853c52e99e94b76ef024/tuiahs18.jpg"},
				<? echo $data_chinese; ?>
                /*сhinese TEAM END*/

                /*finance TEAM*/
                { id: 26397, pid: "directors", name: "Dilshad Muhammad", phone: "+971588227410", email: "dilshad@axcapital.ae", title: "Finance Manager", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/377635/23365dd92c1f65a6eb81283cfddb6812/main/ee3/ee35c00aa6f2ada2de3dd2154881f6cf/Dilshad+Pic.jpg"},
				<? echo $data_finance; ?>
				<? echo $data_drivers; ?>
				 /*finance TEAM END*/



                /*hr TEAM*/
                { id: 19185, pid: "directors", name: "Russell Overy", phone: "+971508827889", email: "russell.overy@axcapital.ae", tags: ["subLevels1"], title: "Head of HR", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/372557/23365dd92c1f65a6eb81283cfddb6812/main/b72/b72e1187138b0bb38e250f1a890b937e/Russell.jpg"},
				{ id: 30931, pid: 19185, name: "James Glass", title: "Head of L&D", phone: "+971526447714", email: "j.glass@axcapital.ae", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/395326/23365dd92c1f65a6eb81283cfddb6812/main/415/415a712cfccaff3e61d53d57e7c921e7/photo_2022-05-20_09-14-03.jpg" },
				<? echo $data_james; ?>
				<? echo $data_hr; ?>
				<? echo $data_rec; ?>




                /*hr TEAM END*/

			   /* Creative Department */
				{ id: 92860, pid: "directors", name: "Polina Vodzinskaya", phone: "", email: "polina@axcapital.ae", title: "Head of Creative", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/490086/23365dd92c1f65a6eb81283cfddb6812/main/893/8937b331cef27531c19da07b923a5ad8/image_2022-08-27_09-23-51.png"},
				<? echo $data_creative; ?>


                /*FO TEAM*/
				{ id: 80554, pid: "directors", name: "Stella Kovac", phone: "+971509833494", email: "s.kovac@axcapital.ae", tags: ["subLevels1"], title: "Front Office Manager", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/main/582/582d92c7fb6a5fd9aabe9ad2e939f952/Stella+profile.jpg"},
				<? echo $data_office; ?>

                /*FO TEAM END*/
                              

                /*Property Management TEAM*/  
                { id: 23344, pid: "directors", name: "Shalabh Goel", phone: "+971521706914", email: "s.goel@axcapital.ae", title: "Head of Property Management", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/471331/23365dd92c1f65a6eb81283cfddb6812/main/a23/a2375e427fd5036b5cba5dde53302cc6/20220804_173422457_iOS.jpg"},
				<? echo $data_pm; ?>

                /*Property Management TEAM END*/


                

                /*Secondary TEAM*/  
                { id: 83491, pid: "directors", name: "Liz O'Connor", phone: "+971 52 235 3566", email: "l.oconnor@axcapital.ae", tags: ["subLevels1"], title: "Head of Secondary", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/main/1a6/1a6079cd271449dec348c1a2af5590ab/avatar.png"},





                    /* Ben Team */
                    { id: 1034, pid: 83491, name: "Ben Thomas", title: "Secondary Sales Director", phone: "+971521962986", email: "ben.thomas@axcapital.ae", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/368137/23365dd92c1f65a6eb81283cfddb6812/main/428/428a3575fb72e88b554fce6c99cb805d/photo_2021-12-01_15-04-23.jpg"},

                    <? echo $data_ben; ?>


						{ id: 556, pid: 1034, name: "Maksim Tuguchev", title: "Senior Sales Manager", phone: "+971586448869", email: "m.tuguchev@axcapital.ae", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/361094/23365dd92c1f65a6eb81283cfddb6812/main/436/436f8ad4f4653317d84c5473f276cc53/phto+4.JPG"},

						/* Maksim Team */
						<? echo $data_maksim; ?>

						{ id: 519, pid: 1034, name: "Shehryar Malik", title: "Senior Sales Manager", phone: "+971521937175", email: "shehryar.malik@axcapital.ae", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/366991/23365dd92c1f65a6eb81283cfddb6812/main/3a7/3a71c1a616f7e3001ae62e772864cfe8/photo_2022-01-18_18-17-45.jpg"},

						/* Malik Team */
						<? echo $data_malik; ?>

					/* Ben Team END */





                    /* Call center */
					<? echo $data_cc; ?>
					/*{ id: 57451, stpid: "callcentersecond", name: "Lata Gyanchandani", title: "Telesales Agent", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/480680/23365dd92c1f65a6eb81283cfddb6812/main/2ba/2bad00f4cd99cb44a04b8f6e635684de/photo_2022-06-23_11-10-09.jpg" },
                    { id: 75645, stpid: "callcentersecond", name: "Ragesree Kayal", title: "Telesales Agent", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/469529/23365dd92c1f65a6eb81283cfddb6812/main/5c4/5c44a0a71c81e47d7655183c9aa0abb2/avatar.png" },
					{ id: 40730, stpid: "callcentersecond", name: "Firdows Mohammed", title: "Telesales Agent", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/480682/23365dd92c1f65a6eb81283cfddb6812/main/97c/97ccc41bb9416bd182a1b8403187a4a3/photo_2022-05-09_15-49-18.jpg" },
					{ id: 64820, stpid: "callcentersecond", name: "Rita Noun", title: "Telesales Agent", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/460472/23365dd92c1f65a6eb81283cfddb6812/main/599/599334db4d11cc273a1039bce996ccd2/avatar.png" },*/

					/*Media team */
					<? echo $data_media ?>


                    /* Chris team */

                    { id: 48559, pid: 83491, name: "Chris Gardner", title: "Secondary Sales Director", phone: "+971561772585", email: "c.gardner@axcapital.ae", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/403099/23365dd92c1f65a6eb81283cfddb6812/main/7df/7df5f8e4e5fcb86054066f7f9e49d7d9/avatar.png"},

                    <? echo $data_chris; ?>


					{ id: 53571, pid: 48559, name: "Callum Radford", title: "Team Leader", phone: "+971549932634", email: "c.radford@axcapital.ae", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/462975/23365dd92c1f65a6eb81283cfddb6812/main/24e/24e2f764fa242d5faf8538bd54c206f4/New+Profile+Picture.jpg"},

					/* Callum  Team */
					<? echo $data_callum ?>


                    /* Conveyancing */
					<? echo $data_convey; ?>
					/* Short Term Let  */
					<? echo $data_st; ?>


					/* Robert Team */
					   /* { id: 53573, pid: 83491, name: "Secondary Sales Director", title: "Secondary Sales Director", phone: "+971549932632", email: "r.mcdowell@axcapital.ae", img: "https://i.pinimg.com/280x280_RS/2e/45/66/2e4566fd829bcf9eb11ccdb5f252b02f.jpg"},*/

					   	// Belinda
						{ id: 76298, pid: 48559, name: "Belinda Smith", title: "Team Manager", phone: "+971528563592", email: "b.smith@axcapital.ae", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/481106/23365dd92c1f65a6eb81283cfddb6812/main/277/277413babad53ea967cc61bc5b6d680c/avatar.png"},

						<? echo $data_belinda; ?>

					   	//Jamaul
						{ id: 32629, pid: 48559, name: "Jamaul Whyte", title: "Team Manager", phone: "+971582411563", email: "j.whyte@axcapital.ae", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/377289/23365dd92c1f65a6eb81283cfddb6812/main/db5/db50d04ba6260a1ee12e52d4fff33f3d/avatar.png"},

						<? echo $data_jamaul; ?>

					   	//Nigel
					   { id: 62522, pid: 48559, name: "Nigel Penney", title: "Team Leader", phone: "+971529164257", email: "n.penney@axcapital.ae", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/437156/23365dd92c1f65a6eb81283cfddb6812/main/9af/9af47c3902bf7b7131bf8819fd79e6b4/photo_2022-07-06_14-15-07.jpg"},

					   <? echo $data_nigel; ?>


                /*Secondary TEAM END*/


                /* Corporate */
			   { id: 58677, pid: "directors", name: "Valeriia Kravchenko", phone: "+971521925615", email: "v.kravchenko@axcapital.ae", title: "Head of Corporate Services", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/resize_cache/492423/23365dd92c1f65a6eb81283cfddb6812/main/f41/f41f0f39993d1bc23db5970a3a68a3f6/photo_2022-06-23_11-50-07.jpg" }, 



                /*{ id: 9, pid: "directors", name: "Skye Terrell", title: "Manager", img: "https://cdn.balkan.app/shared/12.jpg" },
                { id: 14, stpid: "sales", name: "Bret Fraser", title: "Sales", img: "https://cdn.balkan.app/shared/13.jpg" },
                { id: 15, stpid: "sales", name: "Steff Haley", title: "Sales", img: "https://cdn.balkan.app/shared/14.jpg" }*/

            ]);
        };


</script> 
</body>
</html>