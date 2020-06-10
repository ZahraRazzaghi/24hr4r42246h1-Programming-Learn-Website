<?php
require_once 'engin/db.php';
if(!isset($_SESSION[loggedin])){
    header('Location: LandRegister.php');
}
$UserEmail =$_SESSION['loggedin'];
$result=mysqli_query($db,"SELECT * FROM users_tbl WHERE Usr_UserName_='$UserEmail'");
$fetch=mysqli_fetch_array($result);
echo $fetch['Usr_DisplayName'];
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link href="assests/css/style.css" type="text/css" rel="stylesheet">
    <link href="assests/sass/style-UserDashboard.sass" type="text/css" rel="stylesheet">
</head>
<body>
<?php

echo $fetch['Usr_DisplayName'];

?>

?>
<!---Start Header of web page --->
<header class="gh-head">
    <nav class="gh-navbar inner">
        <div class="gh-navbar-left">
           <nav class="user-dashboard-top-menu">
               <ul>
               <li><a aria-current="page" class="gh-nav-logo gh-navbar-item" href="#">پروفایل</a>
               <ul>
                   <li><a aria-current="page" class="gh-nav-logo gh-navbar-item" href="#">تنظیمات</a></li>
                   <li><a aria-current="page" class="gh-nav-logo gh-navbar-item" href="engin/LogOut.php">خروج</a></li>
               </ul></li>
                   <li><a aria-current="page" class="gh-nav-logo gh-navbar-item" href="Courses.php">درس ها</a></li>
               </ul>
           </nav>
        </div>
    </nav>
</header>
<!---End Header of web page --->

<!--- Start My Courses --->
<div class="your-courses-section">
    <h3 class="your-courses-heading">
        آموزش های شما
    </h3>
</div>
<!--- End My Courses --->


HTML SCSS

Result

<div class="container" x-data="{ rightSide: false, leftSide: false }">
    <div class="left-side" :class="{'active' : leftSide}">
        <div class="left-side-button" @click="leftSide = !leftSide">
            <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M19 12H5M12 19l-7-7 7-7"/>
            </svg>
        </div>
        <div class="logo">ULTRANET</div>
        <div class="side-wrapper">
            <div class="side-title">MENU</div>
            <div class="side-menu">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        <path d="M9 22V12h6v10" />
                    </svg>
                    Home
                </a>
                <a href="#">
                    <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg>
                    Latest News
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                        <circle cx="12" cy="10" r="3" /></svg>
                    Explore
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                        <path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" />
                    </svg>
                    Files
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                        <circle cx="8.5" cy="8.5" r="1.5" />
                        <path d="M21 15l-5-5L5 21" />
                    </svg>
                    Galery
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                        <path d="M16 2v4M8 2v4M3 10h18" />
                    </svg>
                    Events
                </a>
            </div>
        </div>
        <div class="side-wrapper">
            <div class="side-title">YOUR FAVOURITE</div>
            <div class="side-menu">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 472.11 472.11">
                        <path d="M260.07 216.11a63.94 63.94 0 00-28.26-53.1 55.95 55.95 0 00-43.74-90.9c-.8 0-1.6.1-2.4.12a56 56 0 10-107.2 0c-.8 0-1.6-.12-2.4-.12a55.95 55.95 0 00-43.75 90.9 64 64 0 000 106.2 55.95 55.95 0 0043.75 90.9h112a55.95 55.95 0 0043.74-90.9 63.94 63.94 0 0028.26-53.1z" fill="#6a9923" />
                        <path d="M193.8 178.51a8 8 0 00-11.32-.16l-42.41 41.03V104.1a8 8 0 00-16 0v56.7l-36.35-36.35a8 8 0 00-11.31 11.3l47.66 47.67V292.8l-34.35-34.34a8 8 0 00-11.31 11.3l45.66 45.67V464.1a8 8 0 0016 0V241.63l53.6-51.78a8 8 0 00.12-11.34z" fill="#618c20" />
                        <path d="M468.07 216.11a63.94 63.94 0 00-28.26-53.1 55.95 55.95 0 00-43.74-90.9c-.8 0-1.6.1-2.4.12a56 56 0 10-107.2 0c-.8 0-1.6-.12-2.4-.12a55.95 55.95 0 00-43.75 90.9 64 64 0 000 106.2 55.95 55.95 0 0043.75 90.9h112a55.95 55.95 0 0043.74-90.9 63.94 63.94 0 0028.26-53.1z" fill="#6a9923" />
                        <path d="M401.72 178.46a8 8 0 00-11.31 0l-42.34 42.34V104.11a8 8 0 00-16 0v56.7l-36.35-36.35a8 8 0 00-11.31 11.3l47.66 47.67V292.8l-34.35-34.34a8 8 0 00-11.31 11.3l45.66 45.67V464.1a8 8 0 0016 0V242.87c.6-.3 1.15-.66 1.65-1.1l52-52a8 8 0 000-11.31z" fill="#618c20" />
                        <path d="M364.07 216.11a63.94 63.94 0 00-28.26-53.1 55.95 55.95 0 00-43.74-90.9c-.8 0-1.6.1-2.4.12a56 56 0 10-107.2 0c-.8 0-1.6-.12-2.4-.12a55.95 55.95 0 00-43.75 90.9 64 64 0 000 106.2 55.95 55.95 0 0043.75 90.9h112a55.95 55.95 0 0043.74-90.9 63.94 63.94 0 0028.26-53.1z" fill="#88b337" />
                        <path d="M297.72 178.46a8 8 0 00-11.31 0l-42.34 42.34V104.11a8 8 0 00-16 0v56.7l-36.35-36.35a8 8 0 00-11.31 11.3l47.66 47.67V292.8l-34.35-34.34a8 8 0 00-11.31 11.3l45.66 45.67V464.1a8 8 0 0016 0V242.87c.6-.3 1.15-.66 1.65-1.1l52-52a8 8 0 000-11.31z" fill="#6a9923" />
                        <path d="M372.07 472.11h-272a8 8 0 010-16h272a8 8 0 010 16z" fill="#595959" /></svg>
                    Foresto
                </a>
                <a href="#">
                    <svg viewBox="0 0 56 58" width="512" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" transform="translate(0 -1)">
                            <path d="M46.8 48.4a30.5 30.5 0 01-8.8-24l6.9-12C44.4 9.6 41.6 1 28 1A32 32 0 003.4 13.5a.2.2 0 00.2.4l2.5-.5a.5.5 0 01.4.8 14.2 14.2 0 00-3.3 4.3.2.2 0 00.3.4l2.5-.6a.5.5 0 01.6.6C5 22.5-.4 37.1.9 56.8a.5.5 0 00.9.2c2.2-3.3 5-6.2 8.4-8.3a.5.5 0 01.7.4c0 2.4.8 4.7 2.4 6.4a.5.5 0 001-.1 14 14 0 015.4-8h.5c1.7 1.2 3 3.8 3.6 5.8.5 1.8 1 3.6 1.1 5.4a.5.5 0 00.8.4c7-4 7.1-8.5 7.2-8.6a.5.5 0 01.9-.2c1.4 1.6 2.7 3.4 3.7 5.2a.5.5 0 001 0c.8-2 1.3-4.3 1.5-6.6l6.4.5a.5.5 0 00.4-1z" fill="#f9eab0" />
                            <path d="M44.5 49c-4.8-.4-4.3-.3-5.6-.6a.5.5 0 00-.5.5c-.2 2-.6 4-1.2 5.9-1-1.7-2.2-3.2-3.4-4.7a.5.5 0 00-.9.2v.1c-.7 4.4-5.4 7.5-7.2 8.5a.5.5 0 01-.8-.4c-.4-3.6-1.6-8.8-4.6-11a.5.5 0 00-.6 0 14 14 0 00-5.5 7.9c-1.3-1.8-2-4-2-6.2a.5.5 0 00-.6-.4l-.7.4a.5.5 0 00-.7-.4c-2.7 1.7-5 3.9-7 6.4a91.2 91.2 0 015-36.8.5.5 0 00-.4-.1l-1.2.3c-.1-.2-.4-.4-.6-.3l-.7.1c.8-1.5 1.8-3 3-4.2.4-.3 0-1-.4-.8l-1.2.2c0-.2-.3-.3-.5-.2l-.7.1c.4-.4 6.8-10.3 18.4-12.2a27 27 0 013.9-.3c12 0 14.5 8.7 15 11.3l-6.2 12a32.6 32.6 0 007.9 24c.2.3.2.6 0 .8z" fill="#f5efca" />
                            <path d="M27.8 1z" fill="#ecf0f1" />
                            <path d="M53 29c.1-1.8-.5-3.6-1.8-5-1.5-1.6-4.2-3-9.2-3-12 0-13 2-13 2s0-3.8 10-6.7c.5-.2.8-.6.8-1.1-.1-1 .2-2.1.9-2.9.2-.2.5-.3.8-.3 1.7 0 8 .4 10.5 3 3 3 5 7 1 14z" fill="#f0c419" />
                            <path d="M51.2 24c-4.5 5.2-3.8-1.8-19.2 1 0 0-3 0-3-2 0 0 1-2 13-2 5 0 7.7 1.4 9.2 3z" fill="#f29c1f" />
                            <path d="M32 12.3a3 3 0 11-3.5-2.3z" fill="#f0c419" />
                            <path d="M44 18a1 1 0 010-2c.5-.1 1-.3 1.3-.7a1 1 0 011.4 1.4C46 17.4 45 18 44 18z" fill="#e57e25" />
                            <circle cx="29" cy="13" fill="#393f4a" r="2" />
                            <path d="M34.6 14c-2 0-3.8-.9-5.2-2.2a4 4 0 00-3.4-1.1c-2 .4-3.1 2.7-3.1 2.8a1 1 0 01-1.8-1s1.6-3.1 4.5-3.8c1.8-.3 3.6.3 5 1.5 2.1 1.8 3.6 2 4.4 1.9.4-.1.8-.3 1.1-.6a1 1 0 011.7 1c-.8 1-2 1.6-3.2 1.6z" fill="#7f6e5d" />
                        </g>
                    </svg>
                    Birds
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M339.4 346.5a636.5 636.5 0 00-46.7-140.2 8.4 8.4 0 00-7.6-4.8h-21a8.4 8.4 0 00-8 11 662.9 662.9 0 0129 289.7 8.4 8.4 0 008.4 9.5h50.3c4.4 0 8.1-3.6 8.3-8 2.3-52.8-2-105.6-12.7-157.2z" fill="#ff9940" />
                        <g fill="#f5760f">
                            <path d="M300.7 508.8a8.4 8.4 0 01-2-6.6 662.7 662.7 0 00-29-289.7 8.4 8.4 0 018-11H264a8.4 8.4 0 00-8 11 662.9 662.9 0 0129 289.7 8.4 8.4 0 008.4 9.5H307c-2.4 0-4.7-1-6.3-2.9z" />
                            <path d="M331.2 312.2l-48.8 9.1c.9 5.6 1.7 11.1 2.4 16.7l50.6-9.5c-1.3-5.5-2.7-10.9-4.2-16.3zM288 369.2l1.1 16.7h57.2a641 641 0 00-2.6-16.7H288z" />
                        </g>
                        <path d="M499.7 157.8A125.9 125.9 0 00276.9 212a8.4 8.4 0 0010.2 9.7L495 171a8.5 8.5 0 004.6-13.3z" fill="#a4d64d" />
                        <path d="M351.1 2.9a8.4 8.4 0 00-7.5-2.8 125.9 125.9 0 00-93 185c7.4 13.4 17 25.2 28.6 35.1a8.4 8.4 0 0013.5-4l60.1-205.5c.8-2.7.2-5.6-1.7-7.8z" fill="#8ec42f" />
                        <g fill="#a4d64d">
                            <path d="M327 199.3c-15.3-.3-30.3 2.1-44.7 7.2a8.4 8.4 0 00-3.3 13.7l148 154.7a8.5 8.5 0 0013.8-2.6 125.9 125.9 0 00-113.7-173z" />
                            <path d="M293.3 212.1a125.9 125.9 0 00-222.8-54.3A8.5 8.5 0 0075 171l208 50.7a8.4 8.4 0 0010.2-9.7z" />
                        </g>
                        <path d="M293.2 212.5c-.6-2.8-2.6-5-5.3-6a125.9 125.9 0 00-158.5 165.8c2.2 5.5 9.7 7 13.8 2.6l148-154.7c2-2 2.7-5 2-7.7z" fill="#8ec42f" />
                        <path d="M491.7 496.5c-71.3-45-153.8-68.7-238.6-68.7S86 451.6 14.5 496.5A8.4 8.4 0 0019 512h468.3a8.4 8.4 0 004.4-15.5z" fill="#ffd042" />
                        <path d="M35.5 506c-1-3.6.4-7.5 3.6-9.5A447 447 0 01265.4 428l-12.3-.2a447.2 447.2 0 00-238.6 68.7A8.4 8.4 0 0019 512h24.6c-3.8 0-7-2.5-8-6z" fill="#ffc412" />
                        <circle cx="290.8" cy="218.3" r="29.3" fill="#a4a09a" />
                        <path d="M299.2 239.2a29.3 29.3 0 01-24.5-45.4 29.3 29.3 0 1040.7 40.6c-4.7 3-10.2 4.8-16.2 4.8z" fill="#928d86" />
                        <circle cx="316" cy="256" r="29.3" fill="#a4a09a" />
                        <path d="M324.4 281.1a29.3 29.3 0 01-17.1-53.1 29.4 29.4 0 1025.8 51.8c-2.8.9-5.7 1.3-8.7 1.3z" fill="#928d86" />
                        <circle cx="261.5" cy="256" r="29.3" fill="#a4a09a" />
                        <path d="M269.9 277a29.3 29.3 0 01-24.5-45.5A29.3 29.3 0 10286 272c-4.6 3-10.2 4.9-16.1 4.9z" fill="#928d86" />
                        <g fill="#ffb266">
                            <circle cx="274.1" cy="473.9" r="8.4" />
                            <circle cx="378.9" cy="482.3" r="8.4" />
                            <circle cx="328.6" cy="465.6" r="8.4" />
                            <circle cx="223.8" cy="457.2" r="8.4" />
                            <circle cx="202.8" cy="482.3" r="8.4" />
                            <circle cx="144.2" cy="482.3" r="8.4" />
                        </g>
                    </svg>
                    Nature
                </a>
                <a href="#"><svg viewBox="0 0 511.4 511.4" width="512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M102.8 145c-47.5 0-86 38.6-86 86v29.3h168.6V145z" fill="#0dca71" />
                        <path d="M432.9 377.8l-43-70.8-95.1 60.2 84 144.2 25.2-15.3a86.2 86.2 0 0028.9-118.3z" fill="#0cba68" />
                        <path d="M121.6 307l-43 70.8a86.2 86.2 0 0028.8 118.3l25.3 15.3 84-144.2z" fill="#0dca71" />
                        <path d="M408.6 145H326v115.3h168.7v-29.2c0-47.5-38.6-86.1-86-86.1z" fill="#0cba68" />
                        <path d="M345.9 90.2A90.3 90.3 0 00255.7 0L245 85.3l10.7 82.1H346V90.2z" fill="#0cba68" />
                        <path d="M255.7 0a90.3 90.3 0 00-90.2 90.2v77.2h90.2z" fill="#0dca71" />
                        <g>
                            <path d="M420 269.3c0-62.4-31.7-117.1-79.2-147.4l-85 147.4z" fill="#ebb65b" />
                            <path d="M255.7 269.3L340.8 122c-24.8-15.8-54-25-85-25L245 160z" fill="#fdd278" />
                            <path d="M91.4 269.3h164.3l-85-147.4a174.3 174.3 0 00-79.3 147.4z" fill="#ffc663" />
                            <path d="M255.7 97c-31.1 0-60.2 9.1-85 25l85 147.3z" fill="#ffe7ab" />
                            <path d="M255.7 269.3L245 384l10.7 57.7c31.1 0 60.3-9.2 85.1-25z" fill="#ebb65b" />
                            <path d="M255.7 269.3l85.1 147.4c47.5-30.2 79.2-85 79.2-147.4z" fill="#fdd278" />
                            <path d="M170.6 416.7c24.9 15.8 54 25 85.1 25V269.3z" fill="#ffc663" />
                            <path d="M255.7 269.3H91.4c0 62.4 31.8 117.2 79.2 147.4z" fill="#ffe7ab" />
                            <path d="M337 269.3L296.4 199h-40.7L245 266.7l10.7 73h40.7z" fill="#ffe5a5" />
                            <path d="M215 198.9l-40.6 70.4 40.7 70.5h40.6V198.9z" fill="#fffaed" />
                        </g>
                    </svg>
                    Animals
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M176.6 360l-51.1-24.2-26-12.3L155.1 187l35.5-8.8s-58 97.4-14 181.9z" fill="#f8b40e" />
                        <path d="M488.8 330.5v-62.4c0-5-4-9-9-9h-25.7c-5 0-9 4-9 9v22.5" fill="#f2171c" />
                        <path d="M464.7 330.5v-71.3H454c-5 0-9 4-9 8.9v22.5" fill="#d8131e" />
                        <path d="M225.8 266.7a60.1 60.1 0 110 120.2l42 22.6 141.3-15 14.6-127.8-190.4-15" fill="#bf8104" />
                        <path d="M130.2 107.4H175a39.8 39.8 0 110 79.7h-44.8a8.1 8.1 0 01-8.1-8.2v-63.4c0-4.5 3.6-8.1 8-8.1z" fill="#f8b40e" />
                        <path d="M175 170.8h-53v8.1c0 4.5 3.7 8.1 8.2 8.1H175a40 40 0 0039-48 39.8 39.8 0 01-39 31.8z" fill="#dd9b0a" />
                        <path fill="#f8b40e" d="M356.5 423H143.1v-36h183.8" />
                        <circle cx="415.1" cy="423" r="78.2" fill="#2c4046" />
                        <path fill="#dd9b0a" d="M167.5 187l-64.9 173.8-3-37.3L155 187z" />
                        <circle cx="415.1" cy="423" r="42.8" fill="#9aa7b8" />
                        <circle cx="99.5" cy="423" r="78.2" fill="#2c4046" />
                        <circle cx="99.5" cy="423" r="42.8" fill="#9aa7b8" />
                        <path d="M99.5 473.6C71.6 473.6 49 451 49 423h15.7a35 35 0 0069.8 0h15.7c0 28-22.7 50.6-50.6 50.6z" fill="#1d2c30" />
                        <path d="M343.6 423A78.8 78.8 0 01381 274.7c42 0 125 22.2 131 135.1.4 7.2-5.3 13.2-12.4 13.2h-156z" fill="#f8b40e" />
                        <path d="M327.6 365.6a78.9 78.9 0 0179-79c12.4 0 28.6 2 45.2 7.8a138.7 138.7 0 00-70.8-19.7A78.9 78.9 0 00343.6 423h8.8a78.7 78.7 0 01-24.8-57.4z" fill="#dd9b0a" />
                        <path d="M199 423a99.5 99.5 0 00-199 0h199z" fill="#f8b40e" />
                        <path d="M116 324.9A99.5 99.5 0 000 423h33a99.5 99.5 0 0183-98.1z" fill="#dd9b0a" />
                        <path d="M415.1 473.6c-27.9 0-50.6-22.7-50.6-50.6h15.7a35 35 0 0069.8 0h15.8c0 28-22.8 50.6-50.7 50.6z" fill="#1d2c30" />
                        <path d="M146.1 107.4h-16a8.1 8.1 0 00-8 8V179c0 4.5 3.6 8.1 8 8.1h16v-79.6z" fill="#a0d9f2" />
                        <path d="M146.1 170.8h-24v8.1c0 4.5 3.6 8.1 8 8.1h16v-16.2z" fill="#84bed3" />
                        <path d="M394.9 222.4l-153 10.8a33.6 33.6 0 00-31.2 33.5h213v-17.4a27 27 0 00-28.8-26.9z" fill="#444d56" />
                        <path fill="#d3d3d3" d="M183.9 65.5h15.7v77.2h-15.7z" />
                        <g fill="#dd9b0a">
                            <path d="M452.2 337.4h-76.6a7.9 7.9 0 010-15.8h76.6a7.9 7.9 0 010 15.8zM432.2 362.7h-56.6a7.9 7.9 0 010-15.7h56.6a7.9 7.9 0 010 15.7zM412.1 387.8h-36.5a7.9 7.9 0 010-15.7H412a7.9 7.9 0 010 15.7z" />
                        </g>
                        <circle cx="191.8" cy="147.2" r="23.1" fill="#444d56" />
                        <path d="M191.8 84c-8 0-14.3-6.4-14.3-14.2V25a14.3 14.3 0 1128.6 0v44.6c0 8-6.5 14.3-14.3 14.3z" fill="#e6e6e6" />
                    </svg>
                    Motobike
                </a>
                <a href="#">
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M424 101l-8 25v6l16 21c3 4 0 9-4 9h-27l-5 2-15 22c-3 4-9 3-10-2l-8-25-4-4-25-8c-5-1-6-7-2-10l22-15 2-5V90c0-4 5-7 9-4l21 16h6l25-8c4-2 9 3 7 7z" fill="#fe9901" />
                        <path d="M428 162h-27l-5 2-15 22c-3 4-9 3-10-2l-5-15 2-2 16-23 5-2h28c2 0 4-1 5-3l10 14c3 4 0 9-4 9z" fill="#fb8801" />
                        <circle cx="438.8" cy="403.5" fill="#60b7ff" r="23.4" />
                        <path d="M462 403a23 23 0 11-46-2c4 4 9 7 16 7 12 0 22-10 23-21 4 4 7 10 7 16z" fill="#26a6fe" />
                        <path d="M24 511l321-137-101-100-100-101L7 494c-4 11 6 21 17 17z" fill="#fe7d43" />
                        <path d="M345 374L24 511c-11 4-21-6-17-17 3 1 5 0 8-1l315-134z" fill="#fd6930" />
                        <g fill="#7acaa6">
                            <path d="M47 401l95 60-54 22-60-37zM84 315l162 101-54 23-128-80zM120 229l210 131 15 14-49 21-195-122z" />
                        </g>
                        <g fill="#57be92">
                            <path d="M142 461l-54 22-20-12 54-23zM246 416l-54 23-20-13 54-23zM345 374l-49 21-20-13 53-23 1 1z" />
                        </g>
                        <path d="M136 4c-6 11-18 33-38 41-3 1-3 5 0 7 20 8 32 29 38 41 1 2 4 2 6 0 5-12 18-33 37-41 3-2 3-6 0-7-19-8-32-30-37-41-2-2-5-2-6 0z" fill="#fe9901" />
                        <path d="M179 52c-19 8-32 29-37 41-2 2-5 2-6 0l-9-15a87 87 0 0139-41l13 8c3 1 3 5 0 7z" fill="#fb8801" />
                        <path d="M345 426c-4 9-14 26-30 33-2 1-2 4 0 5 16 7 26 24 30 33 1 2 4 2 5 0 5-9 15-26 31-33 2-1 2-4 0-5-16-7-26-24-31-33-1-2-4-2-5 0z" fill="#fe9901" />
                        <path d="M381 464c-16 7-26 24-31 33-1 2-4 2-5 0l-7-12a70 70 0 0132-33l11 7c2 1 2 4 0 5z" fill="#fb8801" />
                        <g fill="#acacac">
                            <path d="M504 288a52 52 0 00-37-19c-7 0-13 1-20 3-13-8-30-8-50-1a8 8 0 106 14c7-2 17-5 28-3l-3 3c-10 10-13 27-5 38a26 26 0 0021 11c7 0 14-4 18-9l5-12c2-10-1-20-6-28h5c10 0 19 5 26 13a8 8 0 1012-10zm-52 23c-1 4-4 7-8 7s-7-2-8-4c-4-5-2-13 3-18l7-6c5 6 7 13 6 21zM443 80c11 9 28 8 39-2l2-2c2 10-2 21-5 28a8 8 0 1014 6c8-18 9-36 3-50 3-6 4-12 5-19 1-14-5-28-15-39a8 8 0 10-11 11 37 37 0 0110 33c-8-7-18-10-28-9-5 0-9 2-12 4-6 3-10 10-10 18-1 8 2 16 8 21zm7-20c0-2 0-5 3-6 4-3 9-2 13-1 1 0 13 6 12 7l-6 7c-6 4-14 5-19 1-2-2-3-5-3-8zM289 43c-4 1-6 6-5 10 11 30 2 84-18 109a8 8 0 1012 10c11-14 20-36 24-60s3-48-3-65c-2-4-6-6-10-4zM460 231a8 8 0 105-15c-17-6-41-7-65-3s-46 13-60 25a8 8 0 1010 11c25-20 79-29 110-18z" />
                        </g>
                        <circle cx="345.3" cy="31.1" fill="#60b7ff" r="23.4" />
                        <path d="M369 31a23 23 0 11-47 0v-1c4 3 8 5 13 5 13 0 23-10 24-23 6 4 10 11 10 19z" fill="#26a6fe" />
                        <circle cx="227.5" cy="94.5" fill="#60b7ff" r="23.4" />
                        <path d="M251 94a23 23 0 11-47 0c4 2 8 4 13 4 13 0 23-10 23-23 7 4 11 11 11 19z" fill="#26a6fe" />
                        <path d="M164 136l217 217c3 3 3 8 0 11l-21 21c-3 3-8 3-11 0L132 168c-3-3-3-8 0-11l21-21c3-3 8-3 11 0z" fill="#f3eae6" />
                        <path d="M381 364l-21 20c-3 4-8 4-11 0l-15-14c4 3 9 3 12 0l20-20c3-4 3-9 0-12l15 15c3 3 3 8 0 11z" fill="#e1d3ce" />
                    </svg>
                    Dance
                </a>
            </div>
        </div>
        <a href="https://twitter.com/AysnrTrkk" class="follow-me" target="_blank">
      <span class="follow-text">
        <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
        Follow me on Twitter
     </span>
      <span class="developer">
        <img src="https://pbs.twimg.com/profile_images/1253782473953157124/x56UURmt_400x400.jpg" />
        Aysenur Turk — @AysnrTrkk
      </span>
        </a>
    </div>
    <div class="main">
        <div class="search-bar">
            <input type="text" placeholder="Search" />
            <button class="right-side-button" @click="rightSide = !rightSide">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
            </button>
        </div>
        <div class="main-container">
            <div class="profile">
                <div class="profile-avatar">
                    <img src="https://images.genius.com/2326b69829d58232a2521f09333da1b3.1000x1000x1.jpg" alt="" class="profile-img">
                    <div class="profile-name">Quan Ha</div>
                </div>
                <img src="https://images.unsplash.com/photo-1508247967583-7d982ea01526?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="" class="profile-cover">
                <div class="profile-menu">
                    <a class="profile-menu-link active">Timeline</a>
                    <a class="profile-menu-link">About</a>
                    <a class="profile-menu-link">Friends</a>
                    <a class="profile-menu-link">Photos</a>
                    <a class="profile-menu-link">More</a>
                </div>
            </div>
            <div class="timeline">
                <div class="timeline-left">
                    <div class="intro box">
                        <div class="intro-title">
                            Introduction
                            <button class="intro-menu"></button>
                        </div>
                        <div class="info">
                            <div class="info-item">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 503.889 503.889" fill="currentColor">
                                    <path d="M453.727 114.266H345.151V70.515c0-20.832-16.948-37.779-37.78-37.779H196.517c-20.832 0-37.78 16.947-37.78 37.779v43.751H50.162C22.502 114.266 0 136.769 0 164.428v256.563c0 27.659 22.502 50.161 50.162 50.161h403.565c27.659 0 50.162-22.502 50.162-50.161V164.428c0-27.659-22.503-50.162-50.162-50.162zm-262.99-43.751a5.786 5.786 0 015.78-5.779h110.854a5.786 5.786 0 015.78 5.779v43.751H190.737zM32 164.428c0-10.015 8.147-18.162 18.162-18.162h403.565c10.014 0 18.162 8.147 18.162 18.162v23.681c0 22.212-14.894 42.061-36.22 48.27l-167.345 48.723a58.482 58.482 0 01-32.76 0L68.22 236.378C46.894 230.169 32 210.321 32 188.109zm421.727 274.725H50.162c-10.014 0-18.162-8.147-18.162-18.161V253.258c8.063 6.232 17.254 10.927 27.274 13.845 184.859 53.822 175.358 52.341 192.67 52.341 17.541 0 7.595 1.544 192.67-52.341 10.021-2.918 19.212-7.613 27.274-13.845v167.733c.001 10.014-8.147 18.162-18.161 18.162z" /></svg>
                                Product Designer at <a href="#">Bravebist</a>
                            </div>
                            <div class="info-item">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                    <path d="M9 22V12h6v10" />
                                </svg>
                                Live in <a href="#">Hanoi, Vietnam</a>
                            </div>
                            <div class="info-item">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                    <path d="M437 75C388.7 26.6 324.4 0 256 0S123.3 26.6 75 75C26.6 123.3 0 187.6 0 256s26.6 132.7 75 181c48.3 48.4 112.6 75 181 75s132.7-26.6 181-75c48.4-48.3 75-112.6 75-181s-26.6-132.7-75-181zM252.4 481.9c-52-.9-103.7-19.5-145.2-55.8L256 277.2l21.7 21.8a165.9 165.9 0 00-35.7 87c-3.5 30.5 0 63.3 10.4 95.9zM299 320.3l105.7 105.8a224.8 224.8 0 01-121.3 54.1C262 419.5 268 360.3 299 320.3zm21.2-21.2c40-31 99.2-37 160-15.6A224.8 224.8 0 01426 404.8zM482 252.4a231.7 231.7 0 00-96-10.4 165.9 165.9 0 00-87 35.7L277.3 256l148.9-148.8c36.3 41.5 55 93.2 55.8 145.2zm-290.2-39.5c-40 31-99.2 37-160 15.6A224.8 224.8 0 0186 107.2zm-84.5-127a224.8 224.8 0 01121.3-54.1C250 92.5 244 151.7 213 191.7zM270 126c3.5-30.5 0-63.3-10.4-95.9 52 .9 103.7 19.5 145.2 55.8L256 234.8 234.3 213a165.9 165.9 0 0035.7-87zM30 259.6a242 242 0 0072.7 11.7c7.8 0 15.6-.5 23.2-1.3a165.9 165.9 0 0087-35.7l21.8 21.7L85.9 404.8a225.3 225.3 0 01-55.8-145.2z" /></svg>
                                Player name <a href="#">Quan Ha</a>
                            </div>
                        </div>
                    </div>
                    <div class="event box">
                        <div class="event-wrapper">
                            <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" class="event-img" />
                            <div class="event-date">
                                <div class="event-month">Jan</div>
                                <div class="event-day">01</div>
                            </div>
                            <div class="event-title">Winter Wonderland</div>
                            <div class="event-subtitle">01st Jan, 2019 07:00AM</div>
                        </div>
                    </div>
                    <div class="pages box">
                        <div class="intro-title">
                            Your pages
                            <button class="intro-menu"></button>
                        </div>
                        <div class="user">
                            <img src="https://images.unsplash.com/photo-1549068106-b024baf5062d?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0f" alt="" class="user-img">
                            <div class="username">Chandelio</div>
                        </div>
                        <div class="user">
                            <img src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=d5849d81af587a09dbcf3f11f6fa122f" alt="" class="user-img">
                            <div class="username">Janet Jolie</div>
                        </div>
                        <div class="user">
                            <img src="https://images.unsplash.com/photo-1546539782-6fc531453083?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" class="user-img">
                            <div class="username">Patrick Watsons</div>
                        </div>
                    </div>
                </div>
                <div class="timeline-right">
                    <div class="status box">
                        <div class="status-menu">
                            <a class="status-menu-item active" href="#">Status</a>
                            <a class="status-menu-item" href="#">Photos</a>
                            <a class="status-menu-item" href="#">Videos</a>
                        </div>
                        <div class="status-main">
                            <img src="https://images.genius.com/2326b69829d58232a2521f09333da1b3.1000x1000x1.jpg" class="status-img">
                            <textarea class="status-textarea" placeholder="Write something to Quan Ha.."></textarea>
                        </div>
                        <div class="status-actions">
                            <a href="#" class="status-action">
                                <svg viewBox="-42 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M333.7 123.3c0 33.9-12.2 63.2-36.2 87.2-24 24-53.3 36.1-87.1 36.1h-.1c-33.9 0-63.2-12.1-87.1-36.1-24-24-36.2-53.3-36.2-87.2 0-33.9 12.2-63.2 36.2-87.2 24-24 53.2-36 87-36.1h.2c33.8 0 63.2 12.2 87.1 36.1 24 24 36.2 53.3 36.2 87.2zm0 0" fill="#ffbb85" />
                                    <path d="M427.2 424c0 26.7-8.5 48.3-25.3 64.3-16.5 15.7-38.4 23.7-65 23.7H90.2c-26.6 0-48.5-8-65-23.7C8.5 472.3 0 450.7 0 423.9c0-10.2.3-20.4 1-30.2a302.7 302.7 0 0112.1-64.9c3.3-10.3 7.8-20.5 13.4-30.3 5.8-10.2 12.5-19 20.1-26.3a89 89 0 0129-18.2c11.2-4.4 23.7-6.7 37-6.7 5.2 0 10.3 2.2 20 8.5l21 13.5c6.6 4.3 15.7 8.3 27 11.9a107.7 107.7 0 0033 5.3c11 0 22-1.8 33-5.3 11.2-3.6 20.3-7.6 27-12l21-13.4c9.7-6.3 14.7-8.5 20-8.5 13.3 0 25.7 2.3 37 6.7a89 89 0 0128.9 18.2c7.6 7.3 14.4 16.1 20.2 26.3 5.5 9.8 10 20 13.3 30.3a305.5 305.5 0 0112.1 64.9c.7 9.8 1 20 1 30.2zm0 0" fill="#6aa9ff" />
                                    <path d="M210.4 246.6h-.1V0c34 0 63.3 12.2 87.2 36.1 24 24 36.2 53.3 36.2 87.2 0 33.9-12.2 63.2-36.2 87.2-24 24-53.3 36.1-87.1 36.1zm0 0" fill="#f5a86c" />
                                    <path d="M427.2 424c0 26.7-8.5 48.3-25.3 64.3-16.5 15.7-38.4 23.7-65 23.7H210.2V286.5h3.3c11 0 22-1.8 33-5.3 11.2-3.6 20.3-7.6 27-12l21-13.4c9.7-6.3 14.7-8.5 20-8.5 13.3 0 25.7 2.3 37 6.7a89 89 0 0128.9 18.2c7.6 7.3 14.4 16.1 20.2 26.3 5.5 9.8 10 20 13.3 30.3a305.5 305.5 0 0112.1 64.9c.7 9.8 1 20 1 30.2zm0 0" fill="#2682ff" />
                                </svg>
                                People
                            </a>
                            <a href="#" class="status-action">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M87.084 192c-.456-5.272-.688-10.6-.688-16C86.404 78.8 162.34 0 256.004 0s169.6 78.8 169.6 176c0 5.392-.232 10.728-.688 16h.688c0 96.184-169.6 320-169.6 320s-169.6-223.288-169.6-320h.68zm168.92 32c36.392 1.024 66.744-27.608 67.84-64-1.096-36.392-31.448-65.024-67.84-64-36.392-1.024-66.744 27.608-67.84 64 1.096 36.392 31.448 65.024 67.84 64z" fill="#e21b1b" />
                                </svg>
                                Check in
                            </a>
                            <a href="#" class="status-action">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <circle cx="256" cy="256" r="256" fill="#ffca28" />
                                    <g fill="#6d4c41">
                                        <path d="M399.68 208.32c-8.832 0-16-7.168-16-16 0-17.632-14.336-32-32-32s-32 14.368-32 32c0 8.832-7.168 16-16 16s-16-7.168-16-16c0-35.296 28.704-64 64-64s64 28.704 64 64c0 8.864-7.168 16-16 16zM207.68 208.32c-8.832 0-16-7.168-16-16 0-17.632-14.368-32-32-32s-32 14.368-32 32c0 8.832-7.168 16-16 16s-16-7.168-16-16c0-35.296 28.704-64 64-64s64 28.704 64 64c0 8.864-7.168 16-16 16z" />
                                    </g>
                                    <path d="M437.696 294.688c-3.04-4-7.744-6.368-12.736-6.368H86.4c-5.024 0-9.728 2.336-12.736 6.336-3.072 4.032-4.032 9.184-2.688 14.016C94.112 390.88 170.08 448.32 255.648 448.32s161.536-57.44 184.672-139.648c1.376-4.832.416-9.984-2.624-13.984z" fill="#fafafa" />
                                </svg>
                                Mood
                            </a>
                            <button class="status-share">Share</button>
                        </div>
                    </div>
                    <div class="album box">
                        <div class="status-main">
                            <img src="https://images.genius.com/2326b69829d58232a2521f09333da1b3.1000x1000x1.jpg" class="status-img" />
                            <div class="album-detail">
                                <div class="album-title"><strong>Quan Ha</strong> create new <span>album</span></div>
                                <div class="album-date">6 hours ago</div>
                            </div>
                            <button class="intro-menu"></button>
                        </div>
                        <div class="album-content">When the bass drops, so do my problems.
                            <div class="album-photos">
                                <img src="https://images.unsplash.com/photo-1508179719682-dbc62681c355?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2378&q=80" alt="" class="album-photo" />
                                <div class="album-right">
                                    <img src="https://images.unsplash.com/photo-1502872364588-894d7d6ddfab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="" class="album-photo" />
                                    <img src="https://images.unsplash.com/photo-1566737236500-c8ac43014a67?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="" class="album-photo" />
                                </div>
                            </div>
                        </div>
                        <div class="album-actions">
                            <a href="#" class="album-action">
                                <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z" />
                                </svg>
                                87
                            </a>
                            <a href="#" class="album-action">
                                <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1" viewBox="0 0 24 24">
                                    <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
                                </svg>
                                20
                            </a>
                            <a href="#" class="album-action">
                                <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1" viewBox="0 0 24 24">
                                    <path d="M17 1l4 4-4 4" />
                                    <path d="M3 11V9a4 4 0 014-4h14M7 23l-4-4 4-4" />
                                    <path d="M21 13v2a4 4 0 01-4 4H3" />
                                </svg>
                                13
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="right-side" :class="{ 'active': rightSide }">
        <div class="account">
            <button class="account-button">
                <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1" viewBox="0 0 24 24">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                    <path d="M22 6l-10 7L2 6" />
                </svg>
            </button>
            <button class="account-button">
                <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1" viewBox="0 0 24 24">
                    <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0" />
                </svg>
            </button>
      <span class="account-user">Quan Ha
        <img src="https://images.genius.com/2326b69829d58232a2521f09333da1b3.1000x1000x1.jpg" alt="" class="account-profile" alt="">
        <span>▼</span>
      </span>
        </div>
        <div class="side-wrapper stories">
            <div class="side-title">STORIES</div>
            <div class="user">
                <img src="https://pbs.twimg.com/profile_images/1102351320567164931/ZCkJgJIH.png" alt="" class="user-img">
                <div class="username">Lisandro Matos
                    <div class="album-date">12 hours ago</div>
                </div>
            </div>
            <div class="user">
                <img src="https://pbs.twimg.com/profile_images/1153966095444992000/1lpIyHaQ.jpg" alt="" class="user-img">
                <div class="username">Gvozden Boskovsky
                    <div class="album-date">29 minutes ago</div>
                </div>
            </div>
            <div class="user">
                <img src="https://pbs.twimg.com/profile_images/1157046181698011136/xZ4wg2Xj.jpg" alt="" class="user-img">
                <div class="username">Hnek Fortuin
                    <div class="album-date">3 hours ago</div>
                </div>
            </div>
            <div class="user">
                <img src="https://pbs.twimg.com/profile_images/1108443816565059590/Te-0H20q.png" alt="" class="user-img">
                <div class="username">Lubomir Dvorak
                    <div class="album-date">18 hours ago</div>
                </div>
            </div>
        </div>
        <div class="side-wrapper contacts">
            <div class="side-title">CONTACTS</div>
            <div class="user">
                <img src="https://randomuser.me/api/portraits/men/1.jpg" class="user-img">
                <div class="username">Andrei Mashrin
                    <div class="user-status"></div>
                </div>
            </div>
            <div class="user">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=046c29138c1335ef8edee7daf521ba50" class="user-img">
                <div class="username">Aryn Jacobssen
                    <div class="user-status offline"></div>
                </div>
            </div>
            <div class="user">
                <img src="https://images.unsplash.com/photo-1575084713138-342cae5f8d00?ixlib=rb-1.2.1&auto=format&fit=crop&w=958&q=80" class="user-img">
                <div class="username">Carole Landu
                    <div class="user-status offline"></div>
                </div>
            </div>
            <div class="user">
                <img src="https://images.pexels.com/photos/598745/pexels-photo-598745.jpeg?h=350&auto=compress&cs=tinysrgb" class="user-img">
                <div class="username">Chineze Afa
                    <div class="user-status"></div>
                </div>
            </div>
            <div class="user">
                <img src="https://pbs.twimg.com/profile_images/2452384114/noplz47r59v1uxvyg8ku.png" class="user-img">
                <div class="username">Mok Kwang
                    <div class="user-status"></div>
                </div>
            </div>
            <div class="user">
                <img src="https://randomuser.me/api/portraits/women/63.jpg" class="user-img">
                <div class="username">Naomi Yepes
                    <div class="user-status"></div>
                </div>
            </div>
            <div class="user">
                <img src="https://images.unsplash.com/photo-1476493279419-b785d41e38d8?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=61eaea85f1aa3d065400179c78163f15" class="user-img">
                <div class="username">Shaamikh Ale
                    <div class="user-status"></div>
                </div>
            </div>
            <div class="user">
                <img src="https://m.media-amazon.com/images/M/MV5BMjI4NDcyNjQxNl5BMl5BanBnXkFtZTgwMzI4OTM3NjM@._V1_UY256_CR13,0,172,256_AL_.jpg" class="user-img">
                <div class="username">Sofia Alcocer
                    <div class="user-status idle"></div>
                </div>
            </div>
            <div class="user">
                <img src="https://images.unsplash.com/photo-1509380836717-c4320ccf1a6f?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=e01c8c45a063daaf6d6e571a32bd6c90" class="user-img">
                <div class="username">Wen Yahui
                    <div class="user-status"></div>
                </div>
            </div>
            <div class="user">
                <img src="https://pbs.twimg.com/profile_images/737221709267374081/sdwta9Oh.jpg" alt="" class="user-img">
                <div class="username">Leslee Moss
                    <div class="user-status idle"></div>
                </div>
            </div>
        </div>
        <div class="search-bar right-search">
            <input type="text" placeholder="Search" />
            <div class="search-bar-svgs">
                <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="3"/>
                    <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z"/>
                </svg>
                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 469.34 469.34">
                    <path d="M456.84 76.17l-64-64.06c-16.13-16.13-44.18-16.17-60.37.04L45.77 301.67a10.73 10.73 0 00-2.7 4.59L.41 455.73a10.68 10.68 0 0013.19 13.2l149.33-42.7c1.73-.5 3.3-1.42 4.58-2.7l289.33-286.98c8.06-8.07 12.5-18.78 12.5-30.19s-4.44-22.12-12.5-30.2zM285.99 89.74L325.25 129l-205 205-14.7-29.44a10.67 10.67 0 00-9.55-5.9H78.92L286 89.75zM26.2 443.14l13.9-48.64 34.74 34.74-48.64 13.9zm123.14-35.18L98.3 422.54l-51.5-51.5L61.38 320H89.4l18.38 36.77a10.67 10.67 0 004.77 4.77l36.78 18.39v28.03zm21.33-17.54v-17.09c0-4.04-2.28-7.72-5.9-9.54l-29.43-14.7 205-205 39.26 39.26-208.93 207.07zm271.11-268.7l-47.03 46.61L301 74.6l46.59-47c8.06-8.07 22.1-8.07 30.16 0l64 64c4.03 4.03 6.25 9.38 6.25 15.08s-2.22 11.05-6.22 15.05z" /></svg>
                <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M12 5v14M5 12h14"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="overlay" @click="rightSide = false; leftSide = false" :class="{ 'active': rightSide || leftSide }"></div>
</div>



</body>
</html>