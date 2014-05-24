<?php 
if(!isset($_SESSION['usr'])){
session_start(); 
}
if(isset($_SESSION['usr'])):
?>
<div id="status"></div>
<div id="agents">
    <div id="agent_add" class="agent">
    <h1>Add agent</h1>
    <form id="addAgent" method="post" onSubmit="return addAgent()" action="addAgent.php">
        <input type="text" id="code" name="code" placeholder="Agent Code" class="textbox" />
        <input type="text" id="name" name="name" placeholder="Agent Name" class="textbox" />
        <input type="submit" value="Add Agent" class="button" />
    </form>
    </div>
    
    <div id="agent_del" class="agent">
    <h1>Delete agent</h1>
    <form id="deleteAgent" method="post" onSubmit="return deleteAgent()" action="deleteAgent.php">
        <input type="text" id="dcode" name="code" placeholder="Agent Code" class="textbox" />
        <input type="submit" value="Delete Agent" class="button" />
    </form>
    </div>
</div>
<div id="competitions_add">
    <h1>Add competition</h1>
    <form id="addComp" method="post" action="addCompetition.php" onSubmit="return addCompetition()">
        <input id="title" class="textbox" name="title" type="text" placeholder="Title" />
        <input id="from" class="textbox" name="from" type="text" placeholder="From:DD/MM/YY" />
        <input id="to" class="textbox" name="to" type="text" placeholder="To:DD/MM/YY" />
        <textarea name="condition" id="condition" placeholder="Conditions"></textarea>
        <textarea name="prize" id="prize" placeholder="Prizes"></textarea>
        <input type="submit" class="button" value="Add" />
    </form>
</div>

<div id="competitions_del">

</div>

<?php else:
header('Location:../admin/');
?>

<?php endif; ?>