<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <x-headers headerTitle="Scholar Information" />
    <x-tablesHeaders />
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <x-sidemenu />
            <x-header />
            <div class="layout-page">
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h1>Scholar information</h1>
                        <x-tablev2 tableTitle="Scholar List"/>
                        <x-footer />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-cssComponent />
    <x-tablesFooter />
</body>

</html>
