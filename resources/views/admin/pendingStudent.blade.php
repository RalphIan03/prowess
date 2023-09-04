<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <x-headers headerTitle="Pending Scholars" />
    <x-tablesHeaders />
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <x-sidemenu />
            <x-header />
            <div class="layout-page">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="content-wrapper">
                        <h1>Pending students</h1>
                        <x-tablev2 tableTitle="Pending Scholars" />
                        <x-footer />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-tablesFooter />
    <x-cssComponent />
</body>

</html>
