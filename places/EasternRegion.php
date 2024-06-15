<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Eastern Region</title>
<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #d4ae46;
    color: #5a4e4d;
    line-height: 1.6;
  }
  .main {
 /* Define transparent borders for all sides except the right to maintain the box model */
  border-top: 0 solid transparent;
  border-right: 75px solid transparent; /* Adjust the width as needed */
  border-bottom: 0 solid transparent;
  border-left: 0 solid transparent;

  /* Apply the border image only to the right side */
  border-image-source: url('eastern1.jpg');
  border-image-slice: 30; /* Adjust the slice value as needed */
  border-image-width: 75px; /* The width of the border image */
  border-image-outset: 0;
  border-image-repeat: none;
}

  .container {
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
    overflow: hidden;
  }
  .header {
    background: #5c3a03;
    color: #fff;
    padding: 20px 0;
    text-align: center;
  }
  .language-switcher {
    position: fixed;
    top: 10px;
    right: 10px;
    z-index: 1000;
  }
  .language-switcher button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    background-color: #f7ecd;
    color: #5a4e4d;
  }
  .section {
    background: #fff;
    margin: 20px 0;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  .section h2 {
    border-bottom: 2px solid #c9a87c;
    padding-bottom: 10px;
    margin-bottom: 20px;
    color: #8a7f7c;
  }
  .city-photo img {
    width: 100%;
    height: auto;
    padding: 15px;
    margin: 10px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  select {
    padding: 10px;
    margin-bottom: 20px;
    width: 100%;
    font-size: 16px;
    border-radius: 5px;
  }
  /* Add styles for Arabic content */
  [lang="ar"] {
    font-family: 'Arial', sans-serif;
    display: none;
  }
  /* Style adjustments for RTL layout */
  body[dir="rtl"] {
    text-align: right;
  }
  body[dir="rtl"] .section h2 {
    text-align: right;
  }
  body[dir="rtl"] .language-switcher {
    left: 10px;
    right: auto;
  }
 .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {background-color: #f1f1f1}

  .menu-icon {
    cursor: pointer;
    width: 30px;
    height: 30px;
    background-image: url('menu.png');
    background-size: cover;
    background-repeat: no-repeat;
  }


.container select {
  padding: 10px 45px 10px 20px; /* Adjust padding to make space for the icon */
  border: 2px solid #c9a87c; /* Historical accent color */
  border-radius: 5px;
  appearance: none; /* Remove default arrow */
  -webkit-appearance: none;
  -moz-appearance: none;
  background-color: #f8f8f8;
  cursor: pointer;
  font-size: 16px;
  width: 100%; /* Ensure dropdown fills container */
  box-shadow: 0 2px 5px rgba(0,0,0,0.2); /* Soft shadow for depth */
}



/* Adjustments for hover effect */
.container select:hover {
  border-color: #a67c52; /* Darker shade for interaction */
}

/* Adjustments when the dropdown is focused */
.container select:focus {
  outline: none;
  border-color: #a67c52; /* Consistent with hover state */
}

</style>
</head>
<body class="main">

<div class="language-switcher">
  <button onclick="switchLanguage('en')">English</button>
  <button onclick="switchLanguage('ar')">العربية</button>
</div>

<div class="container">
  <div class="dropdown">
    <div class="menu-icon" onclick="toggleDropdown()"></div>
    <div id="dropdown-content" class="dropdown-content">
      <a href="#history" onclick="showSection('history')">History<br></a>
      <a href="#food" onclick="showSection('food')">Food</a><br>
      <a href="#dressing" onclick="showSection('dressing')">Dressing</a><br>
      <a href="#archaeology" onclick="showSection('antiquities')">Antiquities</a>
    </div>
  </div>
</div>

<div class="container">
  <div class="city-photo">
    <img src="Eastern.png" alt="City Landscape">
  </div>

  <div class="section" id="history">
    <h2 lang="en">History</h2>
    <p lang="en">The region went through varying periods of stability and instability until God granted it to His Majesty King Abdulaziz bin Abdulrahman Al Saud - may God have mercy on him - as he entered it at midnight on Monday, 25 Jumada al-Awwal 1331 AH (May 8, 1913 AD). The next morning, the Ottoman governor of Al-Ahsa and the soldiers of his garrison surrendered, and King Abdulaziz gave them safety. He ordered their deportation via Al-Uqair, then King Abdulaziz sent an expedition to Qatif, which regained it, and the entire region returned under Saudi rule and joined the other regions of this young kingdom.</p>
    <h2 lang="ar" style="display: none;">التاريخ</h2>
    <p lang="ar" style="display: none;">مرت المنطقة بفترات متفاوتة من الاستقرار وعدمه إلى أن قيض الله لها جلالة الملك عبدالعزيز بن عبدالرحمن آل سعود – يرحمه الله – حيث دخلها في منتصف ليلة الاثنين 25جمادى الأولى 1331هـ (8مايو 1913م ) وفي صباح اليوم التالي استسلم متصرف الأحساء العثماني وجنود حاميته فأعطاهم الملك عبدالعزيز الأمان وأمر بترحيلهم عن طريق العقير ثم أرسل الملك عبدالعزيز حملة إلى القطيف فقامت باستردادها حيث عادت جميع المنطقة تحت الحكم السعودي وانضمت للمناطق الأخرى من هذه المملكة الفتية.</p>
  </div>

  <div class="section" id="food">
    <h2 lang="en">Food</h2>
    <p lang="en">Shrimp Kabsa - Hasawi Rice - Machbous - Balaleet - Saqo</p>
    <h2 lang="ar" style="display: none;">الأكل</h2>
    <p lang="ar" style="display: none;">كبسة الربيان - الأرز الحساوي - المكبوس - البلاليط - الساقو</p>
  </div>

  <div class="section" id="dressing">
    <h2 lang="en">Dressing</h2>
    <p lang="en">Traditional costumes in the eastern region:<br>
The name of the shield varies depending on the type of fabric, embroidery, or place of manufacture. Among the most important shields used on occasions and celebrations are the shield or stick, the door-shaped shield, and the open-faced shield. The nafnouf appeared with the development of fashion, and women wear the dress over the shield, except that it is smaller in size than the dress. In the Najd region, its names and types varied depending on the type of embroidery, material, or occasion of use, such as the draped dress, the pickpocket dress, the al-Mufhah dress, the chandelier and naqda dress, and the kurar dress.
</p>
    <h2 lang="ar" style="display: none;">الملابس</h2>
    <p lang="ar" style="display: none;"> الأزياء التقليدية في المنطقة الشرقية: <br>
    الدراعة، ويختلف مسماها على حسب نوع القماش أو التطريز أو مكان الصنع، ومن أهم الدراريع المستخدمة في المناسبات والاحتفالات، دراعة أم عصا، ودراعة بمباوبة، ودراعة مفححة، وقد ظهر النفنوف مع تطور الأزياء، وترتدي المرأة الثوب فوق الدراعة إلا أنه أصغر حجماً من الثوب في منطقة نجد، وتعددت مسمياته وأنواعه حسب نوع التطريز أو الخامة أو مناسبة الاستخدام، مثل الثوب المسرح، أوثوب النشل، وثوب المفحح، وثوب الثريا والنقدة، وثوب الكورار.</p>
  </div>

  <div class="section" id="antiquities">
    <h2 lang="en">ِAntiquities</h2>
    <p lang="en">Al-Ahsa Governorate is full of ancient historical monuments. It is the home of a civilization since ancient times by virtue of its distinctive geographical location, and by virtue of the necessities of life that God endowed it with, represented by water. It is an oasis enriched by springs of water and its greenery, and is subject to great tourist activity on the cultural level, as it is full of important archaeological monuments that tell the story of The history of civilization in this place, such as the Kut Wall, the Jawatha Mosque, the ancient Ibrahim Palace, the House of Allegiance, the Sahoud Palace, Qara Mountain, Al-Majasa Palace, and Al-Uqair Beach and Port.
<br>
The following are the most important landmarks of Dammam (the ancient Aali Palace, the popular village).
<br>
Qatif is home to many historical and archaeological monuments, the most important of which are Tarut Palace and Castle, Darien Island and Castle, and heritage markets.
<br>
In Jubail, there are the islands of Jannah, Jarid, and Karan, and the Jubail Reserve
</p>
    <h2 lang="ar" style="display: none;">الآثار </h2>
    <p lang="ar" style="display: none;">تزخر محافظة الأحساء بالكثير من المعالم التاريخية العريقة، فهي موطن حضارة منذ القدم بحكم موقعها الجغرافي المميز، وبحكم ما حباها الله من مقومات الحياة المتمثّلة في المياه، فهي واحة غناء بعيون المياه وبخضرتها، وقابلة لنشاط سياحي كبير وعلى المستوى الثقافي إذ تذخر بمعالم أثرية هامة تحكي تاريخ الحضارة في هذا المكان مثل سور الكوت، ومسجد جواثا، وقصر إبراهيم الأثري، وبيت البيعة، وقصر صاهود، وجبل قارة، وقصر المجصة، وشاطئ وميناء العقير.
<br>
فيما يأتي من أهم معالم الدمام (قصر عالي الأثري، القرية الشعبية).
<br>
وتحتضن القطيف الكثير من المعالم التاريخية والأثرية وأهمها قصر وقلعة تاروت، وجزيرة وقلعة دارين، والأسواق التراثية.
<br>
وفي الجبيل توجد جزر جنة وجريد وكران، ومحمية الجبيل
</p>
  </div>

</div>
<script>
  function switchLanguage(lang) {
  // Set the direction and language of the document body
  document.body.dir = lang === 'ar' ? 'rtl' : 'ltr';
  document.body.lang = lang;

  // Select all elements with 'lang="ar"' and toggle their display
  var arabicElements = document.querySelectorAll('[lang="ar"]');
  for (var i = 0; i < arabicElements.length; i++) {
    arabicElements[i].style.display = lang === 'ar' ? 'block' : 'none';
  }

  // Select all elements with 'lang="en"' and toggle their display
  var englishElements = document.querySelectorAll('[lang="en"]');
  for (var i = 0; i < englishElements.length; i++) {
    englishElements[i].style.display = lang === 'en' ? 'block' : 'none';
  }
}

    function showSection(section) {
    var sections = document.querySelectorAll('.section, .city-photo');
    sections.forEach(function(sec) {
      sec.style.display = 'none'; // Hide all sections initially
    });
    if (section === 'all') {
      sections.forEach(function(sec) {
        sec.style.display = 'block'; // Show all sections
      });
    } else {
      document.getElementById(section).style.display = 'block'; // Show the selected section
    }
  }
  function toggleDropdown() {
  var dropdown = document.getElementById('dropdown-content');
  dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
}

function showSection(sectionId) {
  // Hide all sections
  var sections = document.getElementsByClassName('section');
  for (var i = 0; i < sections.length; i++) {
    sections[i].style.display = 'none';
  }
  // Show the selected section
  document.getElementById(sectionId).style.display = 'block';
}
</script>

</body>
</html>
