//JavaScript

OrgChart.templates.company = Object.assign({}, OrgChart.templates.ana);
OrgChart.templates.company.size = [330, 50];
// OrgChart.templates.company.node =
//     '<circle cx="100" cy="100" r="100" fill="#ffffff" stroke-width="1" stroke="#aeaeae"></circle>'
//     + '<g transform="matrix(3.5,0,0,3.5,20,20)"><circle cx="12" cy="22" r="12" fill="#039BE5"></circle>'
//     + '<circle cx="33" cy="14" r="10" fill="#FFCA28"></circle>'
//     + '<circle cx="30" cy="32" r="8" fill="#F57C00"></circle></g>';

OrgChart.templates.company.node =
    '<rect x="0" y="0" width="330" height="50" fill="#ffffff" stroke-width="1" stroke="#e8e7ed" rx="15"></rect>';

OrgChart.templates.company.field_0 = '<text style="font-size: 17px;" fill="#040135" x="165" y="30" text-anchor="middle">{val}</text>';

OrgChart.templates.company.ripple = {
    radius: 100,
    color: "#039BE5",
    rect: null
};
//company end




//department
OrgChart.templates.department = Object.assign({}, OrgChart.templates.ana);
OrgChart.templates.department.size = [330, 50];
OrgChart.templates.department.node =
    '<rect x="0" y="0" width="330" height="50" fill="#ffffff" stroke-width="1" stroke="#e8e7ed" rx="15"></rect>';

OrgChart.templates.department.field_0 = '<text style="font-size: 17px;" fill="#040135" x="165" y="30" text-anchor="middle">{val}</text>';
//Department end 



//department dis
OrgChart.templates.dis = Object.assign({}, OrgChart.templates.ana);
OrgChart.templates.dis.size = [330, 50];
OrgChart.templates.dis.node =
    '<rect x="0" y="0" width="330" height="50" fill="#ffffff" stroke-width="1" stroke="#e8e7ed" rx="15"></rect>';

OrgChart.templates.dis.field_0 = '<text style="font-size: 17px;" fill="#ccc" x="165" y="30" text-anchor="middle">{val}</text>';
//Department dis end 




//staff
OrgChart.templates.staff = Object.assign({}, OrgChart.templates.ana);
OrgChart.templates.staff.size = [300, 90];
OrgChart.templates.staff.node =
    '<rect x="0" y="0" height="90" width="300" fill="#b1d0a5" class="test" stroke-width="1" stroke="#aeaeae" rx="10" ry="10"></rect>';
OrgChart.templates.staff.field_0 = '<text data-width="210" class="field_0" style="font-size: 20px;" fill="#ffffff" x="100" y="40" text-anchor="start">{val}</text>';
OrgChart.templates.staff.field_1 = '<text data-width="210" class="field_0" style="font-size: 12px;" fill="#ffffff" x="100" y="55" text-anchor="start">{val}</text>';

OrgChart.templates.staff.ripple = {
    radius: 0,
    color: "#FFCA28",
    rect: null
};
OrgChart.templates.staff.img_0 =
        '<clipPath id="ulaImg">'
        + '<circle cx="50" cy="45" r="40"></circle>'
        + '</clipPath>'
        + '<image preserveAspectRatio="xMidYMid slice" clip-path="url(#ulaImg)" xlink:href="{val}" x="10" y="5" width="80" height="80">'
        + '</image>';
//staff end






// collapse
OrgChart.templates.department.plus =
        '<rect x="0" y="0" width="24" height="24" rx="12" ry="12" fill="#2E2E2E" stroke="#aeaeae" stroke-width="1"></rect>'
    + '<line x1="4" y1="12" x2="20" y2="12" stroke-width="1" stroke="#aeaeae"></line>'
    + '<line x1="12" y1="4" x2="12" y2="20" stroke-width="1" stroke="#aeaeae"></line>'

OrgChart.templates.department.minus =
        '<rect x="0" y="0" width="24" height="24" rx="12" ry="12" fill="#2E2E2E" stroke="#aeaeae" stroke-width="1"></rect>'
    + '<line x1="4" y1="12" x2="20" y2="12" stroke-width="1" stroke="#aeaeae"></line>'

OrgChart.templates.department.expandCollapseSize = 24;

OrgChart.templates.department.ripple = {
    radius: 1,
    color: "#F57C00",
    rect: null
};
//collapse end





var chart = new OrgChart(document.getElementById("tree"), {    
    mouseScrool: OrgChart.action.zoom, //OrgChart.none
    orientation: OrgChart.orientation.top,
    scaleInitial:OrgChart.match.boundary,
    enableSearch: false,
    lazyLoading: true,
    enableSearch: true,
    searchFields: ["name", "job"],
    filterBy: ['name', 'department'],
    searchFieldsWeight: {
            "name": 100, //percent
            "job": 20 //percent
        },
    nodeBinding: {
        field_0: "name",
        img_0: "img",
        field_1: "job"
    },
    tags: {
        "Company": {
            template: "company"
        },
        "Department": {
            template: "department"
        },
        "Staff": {
            template: "staff"
        }, 
        "dis":{
            template: "dis"
        }
    },
    collapse: {
        level: 4, 
        allChildren: true
    },
    nodes: [
        { id: 1, tags: ["Company"], name: "AX HOLDING" },
        { id: 9, pid: 1, tags: ["Staff"], name: "Victoria Shabalina", job: "COO", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/main/a3c/a3cfb15723cb7eca85c866c1307527cc/IMG_9353_s.JPG"},
        { id: 6, pid: 9, tags: ["Staff"], name: "Denis", job: "CEO", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/main/23d/23d3873e568fbf887d5923df93edd7f0/1651825373621.jpg"},

        { id: 2, pid: 6, tags: ["Department"], name: "AX CAPITAL" },
        { id: 3, pid: 6, tags: ["Department"], name: "AX CORPORATE" },
        { id: 4, pid: 6, tags: ["Department"], name: "AX DESIGN" },
        { id: 42, pid: 6, tags: ["Department"], name: "AX HOLIDAYS" },
        { id: 43, pid: 6, tags: ["Department"], name: "AX LUXURY CARS" },
        { id: 44, pid: 6, tags: ["Department"], name: "AX TECHNOLOGY" },
        { id: 45, pid: 6, tags: ["Department"], name: "AX MANAGEMENT" },


        //////////////////////////////////AX Capital team
        { id: 90, pid: 2, tags: ["Staff"], name: "Victoria Shabalina", job: "COO", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/main/a3c/a3cfb15723cb7eca85c866c1307527cc/IMG_9353_s.JPG"},
        { id: 5, pid: 90, tags: ["Staff"], name: "Denis", job: "CEO", img: "https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/main/23d/23d3873e568fbf887d5923df93edd7f0/1651825373621.jpg"},


        { id: 48, pid: 5, tags: ["Department"], name: "Admins" },
        { id: 418, pid: 48, tags: ["Staff"], name: "Liz Gapunuan", job: "Head of Admins", img: " https://upload-5b6ed3f1470f864e3426fe4c1fe063ed.s3.amazonaws.com/main/c4f/c4f9641611c23e411894433c5bc15111/photo_2022-09-28_14-15-56.jpg"},



        { id: 60, pid: 5, tags: ["Department"], name: "Creative Department" },
        { id: 120, pid: 60, tags: ["Staff"], name: "Polina Vodzinskaya", job: "Head of Creative Department" },


        { id: 7, pid: 5, tags: ["Department"], name: "Finance" },
        { id: 1220, pid: 7, tags: ["Staff"], name: "Dilshad Muhammad", job: "Finance Manager" },

        { id: 38, pid: 5, tags: ["Department"], name: "Global Partnerships" },
        { id: 12220, pid: 38, tags: ["Staff"], name: "Belinda Smith", job: "Head of Global Partnerships" },

        { id: 39, pid: 5, tags: ["Department"], name: "IT" },
        { id: 167220, pid: 39, tags: ["Staff"], name: "Otabek Navruzov", job: "CTO" },
            { id: 1929, pid: 167220, tags: ["Department"], name: "Operations" },
            { id: 1729, pid: 167220, tags: ["Department"], name: "Infrastructure - Secondary Sales" },

        { id: 129, pid: 5, tags: ["Department"], name: "Marketing" },
        { id: 112341238, pid: 129, tags: ["Staff"], name: "Tosin Onadeko", job: "CMO" },
            { id: 449, pid: 112341238, tags: ["Department"], name: "Community Management" },
            { id: 469, pid: 112341238, tags: ["Department"], name: "Lead Generation" },


        { id: 29, pid: 5, tags: ["Department"], name: "Off-Plan Sales" },
            { id: 163, pid: 29, tags: ["Staff"], name: "Hisham El Assaad", job: "Head of Off-Plan Sales" },
                { id: 183, pid: 163, tags: ["Staff"], name: "Alexandru Pirtac", job: "Sales Manager" },
                { id: 133, pid: 163, tags: ["Staff"], name: "Dmitry Zolotco", job: "Senior Sales Manager" },
                { id: 153, pid: 163, tags: ["Staff"], name: "Hassan Kiani", job: "Sales Manager" },
                { id: 173, pid: 163, tags: ["Staff"], name: "Raza Mujtaba", job: "Sales Manager" },
                { id: 193, pid: 163, tags: ["Staff"], name: "Simon Quinton", job: "Sales Manager" },

        { id: 49, pid: 5, tags: ["Department"], name: "Operations" },
            { id: 234549, pid: 49, tags: ["Department"], name: "Front Office" },
                { id: 100, pid: 234549, tags: ["Staff"], name: "Stella Kovac", job: "Front Office Manager" },
                    { id: 479, pid: 100, tags: ["Department"], name: "Food & Beverage" },
                        { id: 191, pid: 479, tags: ["Staff"], name: "Kenneth Dizon", job: "Supervisor" },
                    { id: 849, pid: 100, tags: ["Department"], name: "Cleaning" },
                    { id: 949, pid: 100, tags: ["Department"], name: "Reception" },

            { id: 432469, pid: 49, tags: ["Department"], name: "Transportation" },
                { id: 123, pid: 432469, tags: ["Staff"], name: "Vitalii Vlasenko", job: "Head of Transportation" },
                    { id: 1234, pid: 123, tags: ["Staff"], name: "Abdul Rehman", job: "Team Manager" },

            { id: 432349, pid: 49, tags: ["Department"], name: "Procurement" },


        { id: 59, pid: 5, tags: ["Department"], name: "People & Culture" },
            { id: 144, pid: 59, tags: ["Staff"], name: "Russell Overy", job: "Director - People & Culture" },
                { id: 569, pid: 144, tags: ["Department"], name: "Learning & Development" },
                    { id: 11240, pid: 569, tags: ["Staff"], name: "James Glass", job: "Head of L&D" },
                { id: 5669, pid: 144, tags: ["Department"], name: "HR & Operations" },
                { id: 5789, pid: 144, tags: ["Department"], name: "Recruitment" },

        { id: 967, pid: 5, tags: ["Department"], name: "Secondary Sales & Leasing" },
            { id: 16783, pid: 967, tags: ["Staff"], name: "Liz O'Connor", job: "Head of Secondary Sales" },
                { id: 12350, pid: 16783, tags: ["Staff"], name: "Ben Thomas", job: "Sales Director"},
                { id: 1230, pid: 16783, tags: ["Staff"], name: "Chris Gardner", job: "Sales Director" },
                { id: 9532, pid: 16783, tags: ["Department"], name: "Call Center" },
                { id: 9122, pid: 16783, tags: ["Department"], name: "Media Team" },

        { id: 92, pid: 5, tags: ["Department"], name: "Exclusive Developments" },

        ////////////////////////////////// AX Capital end



        //////////////////////////////////AX CORPORATE team
        { id: 10, pid: 3, tags: ["Staff"], name: "Valeriia Kravchenko", job: "Executive Director" },
        //////////////////////////////////AX CORPORATE end

        //////////////////////////////////AX DESIGN team
        { id: 11, pid: 4, tags: ["Staff"], name: "Dmitrii Bogaci", job: "Managing Director"},
            { id: 94532, pid: 11, tags: ["Department"], name: "Furniture" },
                { id: 91532, pid: 94532, tags: ["Department"], name: "Sales" },
                    { id: 91582, pid: 91532, tags: ["Department"], name: "Direct Sales" },
                    { id: 91512, pid: 91532, tags: ["Department"], name: "Show Room" },

                { id: 94832, pid: 94532, tags: ["Department"], name: "Production" },

            { id: 92352, pid: 11, tags: ["Department"], name: "Fit Out" },
            { id: 235292, pid: 11, tags: ["Department"], name: "Interior Design" },
        //////////////////////////////////AX DESIGN end

        //////////////////////////////////AX HOLIDAYS team
        { id: 12, pid: 42, tags: ["Staff"], name: "Naomi Lyons", job: "Executive Director" },
        //////////////////////////////////AX HOLIDAYS end

        //////////////////////////////////AX LUXURY CARS team
        { id: 13, pid: 43, tags: ["Staff"], name: "Vitalii Vlasenko", job: "Executive Director"},
            { id: 321, pid: 13, tags: ["Department"], name: "Furniture" },
                { id: 456, pid: 321, tags: ["Department"], name: "Sales" },
                    { id: 7829, pid: 456, tags: ["Department"], name: "Direct Sales" },
                    { id: 987, pid: 456, tags: ["Department"], name: "Show Room" },

                { id: 944832, pid: 321, tags: ["Department"], name: "Maintenance" },
                { id: 9445832, pid: 321, tags: ["Department"], name: "Rental" },
        //////////////////////////////////AX LUXURY CARS end

        //////////////////////////////////AX TECHNOLOGY team
        { id: 14, pid: 44, tags: ["Staff"], name: "Mustafo Muhammad-Dost", job: "Executive Director" },
            { id: 9875, pid: 14, tags: ["Department"], name: "AX MAP" },
            { id: 3954, pid: 14, tags: ["Department"], name: "Data Mining & ML" },
            { id: 4568, pid: 14, tags: ["Department"], name: "Media & Content" },
            { id: 8543, pid: 14, tags: ["Department"], name: "Operations" },
            { id: 3925, pid: 14, tags: ["Department"], name: "Software Development" },
        //////////////////////////////////AX TECHNOLOGY end



        { id: 15, pid: 6, tags: ["dis"], name: "AX MARKETING" },
        // { id: 16, pid: 4, tags: ["Staff"], name: "" },
        // { id: 17, pid: 4, tags: ["Staff"], name: "" },
        // { id: 18, pid: 4, tags: ["Staff"], name: "" },
        // { id: 19, pid: 4, tags: ["Staff"], name: "" }

    ]
});
