<!DOCTYPE html>
<html lang="en">
<x-head />
<body>
   @if ($action == "home")
    <x-header title="User Table Information"/>
    <x-usertable :collection="$collection" />
   @elseif($action == "user")
   <x-header title="Add User Information"/>
    <x-userdata :errors="$errors" />
   @endif
   <x-footer />
   <script src="js/user.js"></script>
</body>
</html>