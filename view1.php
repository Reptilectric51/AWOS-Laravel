public function index()
{
    return view('users');
}
$users = [
    'Joel',
    'Ellie',
    'Tess',
    //...
];
 
return view('users', [
    'users' => $users
]);
 return view('users')->with([
    'users' => $users
]);
<li><?php echo e($user) ?></li>