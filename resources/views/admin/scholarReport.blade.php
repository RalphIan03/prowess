<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <x-headers headerTitle="Scholar Report"/>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <x-sidemenu />
            <x-header />
            <div class="layout-page">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="content-wrapper">
                        <h1>Scholar Report</h1>
                        <div class="row gy-4">
                            <x-cardMeterAnalytics/>
                            <x-cardBarHorizontal/>
                        </div>
    
                        <x-footer />
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <x-cssComponent />
    

</body>

</html>
