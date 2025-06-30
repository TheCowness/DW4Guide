<!DOCTYPE html>
<html>
<head>
	<title>Dragon Warrior IV Speedrunning Guide by TheCowness</title>
	
	<meta charset="UTF-8">
	<meta name="author" content="Edward Alm">
	<meta name="Description" content="Detailed instructions and explanation for the speedrun of Dragon Warrior IV for the Nintendo Entertainment System">
	<meta name="Keywords" content="Speedrun, Speed Run, Dragon Warrior IV, Dragon Quest IV: Chapters of the Chosen, Dragon Warrior, Dragon Quest, Guide, Help, World Record">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="/bootstrap/css/bootstrap.css" rel="stylesheet" \>
	<script src="jquery-1_11_2_min.js"></script>
	<script src="/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="https://kit.fontawesome.com/9723a9d366.js" crossorigin="anonymous"></script>
</head>
<body>
<!--
Unofficial DW4 Leaderboard 02/17/2023
Ranking numbers come from SRC: https://www.speedrun.com/dw4
    Hakaishin - 5:38:45 (Unverified SRC run)
 1. Anatoleu - 5:45:53 (SRC)
 2. SUMDeaner - 5:52:02 (SRC)
 3. TheCowness - 6:04:55 (SRC)
 4. ErrorOfRuto - 6:11:07 (SRC)
 5. NESCardinality - 6:11:28 (SRC)
 6. Haktical - 6:24:15 (SRC)
 7. JoeC19713 - 6:45:11 (SRC)
    Twitchpoppop - 6:45:57 https://twitter.com/pop_twitch/status/1327187845392461825
 8. Gyre - 6:46:01 (SRC)
 9. Up2ng - 6:51:25 (SRC)
10. HighSpirits - 6:51:50 (SRC)
11. EvilAsh25 - 6:53:20 (SRC)
12. ShinerCCC - 7:01:25 (SRC)
13. Vaeluv - 7:11:05 (SRC)
    Dawarwiz - 7:17:16 (According to his LiveSplit here https://www.twitch.tv/videos/477428279 (Video expired))
14. Everhate - 7:17:41 (SRC)
15. Toad22484 - 7:53:18 (SRC) - https://www.twitch.tv/videos/419629357
16. NorthRex - 7:54:36 (SRC)
17. Zombietraine - 8:01:21 (SRC)
    Joshy_D - "12.5 hours" - https://twitter.com/therealjoshyd/status/739589777209495553
    Lavitz951 - 12:59:21 - https://www.twitch.tv/videos/403546399 (run wasn't highlighted; video has expired)
-->
<div class="bodybgimage"></div>
<div id="headerSlideContainerContainer">
	<div id="headerSlideContainer">
		<div id="headerSlideContent">
			<div class="row">
				<div class="col-sm-12">
					<h4>Dragon Warrior IV Speedrunning Guide</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12"><button class="expand-all expand-all-header">Expand/Collapse All Details</button></div>
			</div>
		</div>
	</div>
</div>
<div class="container guide-container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Dragon Warrior IV Speedrunning Guide by TheCowness</h1><br>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
		<!--- Commenting this code out because I'm just updating the unofficial leaderboard...
			<h3>Last Updated <?php echo date("m/d/Y", filemtime(__FILE__)); ?></h3><br>
		--->
			<h3>Last Updated 2/17/2023</h3><br>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h6>Status: More pictures now.  Planning some chapter five revisions soon™</h6><br>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12"><button class="expand-all">Expand/Collapse All Details</button></div>
	</div>
	<!--
	Leaving these here for easy copy/paste
	
	<div class="row">
		<div class="step col-sm-12"></div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			</div>
		</div>
	</div>
	</div>
	
	
	<a href="#" data-toggle="tooltip" title=""></a>
	-->
	<div class="row">
		<div class="col-sm-12">
			<h3>Welcome</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				The purpose of this document is to provide instructions and explanation for the speedrun of Dragon Warrior IV for the Nintendo Entertainment System.  This route guide is based on the author's opinions of the best way to complete the game as quickly as viably possible, as of the time the guide was written or last revised, based on statistics and facts gathered through research and experimentation.  Aggressive strategies capable of competing with the top leaderboard times will be the primary focus, with alternate safety strats that are more viable for beginners and "no reset runs" mentioned where applicable.<br>
				<br>
				It will be assumed that the runner using this guide is relatively familiar with the game, insofar as being able to navigate the world map, towns, and dungeons, and knowing generally where the required items and plot triggers are.  Focus will instead be placed on movement, menu, and combat optimization.  A new runner who has only completed the game once or twice may need to seek out external resources for dungeon maps or item locations.  Refer to the appendicies for some recommended web sites that host such resources.<br>
				<br>
				This guide is designed to have three layers of detail.  By default, this web page will only show a high-level outline of everything that needs to be done, including items to be collected.  If you click a bullet point, it will expand to elaborate on the point, providing details such as combat advice and explanations of items you collect or purchase.  This second layer may also include alternative routing options or commentary from the author.  A third layer of detail will be delivered in the form of tooltips that display upon hovering over highlighted words and phrases, generally containing semi-useless statistics that may be interesting to learn, but won't necessarily affect the routing or the player's decision-making.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="commentary">
				If you've used this guide to learn the route, I'd love to hear what you thought of it.  Specifically, whether or not you thought the finished product actually fit the description of intent given above.  If you have any questions or feedback, you can contact me at TheCowness on Discord, Twitter or Twitch.
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12">
			<h3>How to Read This Guide</h3>
		</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">These plain-text bullets will contain very basic instructions on what you need to do to complete the run.  If you click them, details will expand below.  Bullets and detail boxes may also contain <a href="#" data-toggle="tooltip" title="Tooltips will generally contain in-depth details that aren't neccesarily helpful to someone attempting this speedrun, but may satisfy a reader's curiosity about a meaningless statistic or explain why the segment is routed the way it is.  Tooltips may also provide author commentary specific to a sentence in a detail box that doesn't pertain to the entire segment.">Tooltips (hover/tap here)</a> that provide deeper details or specific commentary.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				Yellow detail boxes will add more explanation for what you're doing and why.  To make it through your first run, you'll at minimum want to read these detail boxes, but the commentary and alternate strats (see below) can wait until you know what you're doing.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
				Green "alt-strat" boxes explain alternative options you might prefer over the main route.  They're often safer and slower strats, particularly strats with a higher consistency rate that you might use in a "no-reset" run, such as for a race or a marathon performance, or simply if you aren't targeting a world record time.  As long as this run is, you can incorporate several of these slower, but more consistent, strategies and still get a very respectable time in this game.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="aggro-strat">
				Sort of the opposite of the above, the red "aggro strat" boxes will detail strategies that you should not use unless you're willing to reset the run over a small potential time save.  These are risky strats that are not recommended until you have a good grasp on the segment, or if your run has fallen behind already and you need to make up some time.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="commentary">
				Blue commentary boxes can provide anything from trivia to anecdotes, and will rarely help you speedrun the game.  Where the tooltips might break down a target gold amount into an itemized list, commentary trivia usually lists statistics such as the odds of getting into a fight on a specific walk, which might be nice to know but ultimately won't affect any of your decisions.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="todo">
				Finally, the light-colored "todo" boxes are basically notes to myself reminding me of things I want to research some day.  I went back and forth on to whether I wanted these to be visible, and ultimately decided to show them, because it gives the reader an idea of some places that small optimizations could still be made.
			</div>
		</div>
	</div>
	</div>
	
	
	<div class="row">
		<div class="col-sm-12">
			<h3>Power On!</h3>
		</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Create your file in Adventure Log 1 using a short name, male hero, and Message Speed 1.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			There are a few factors in character creation that affect the timing of your run.<br>
			<br>
			Adventure Log 1 is obviously used because it's faster <a href="#" data-toggle="tooltip" title="I typically just mash Start and A as fast as I can after resetting to get back into the game.">to select the first adventure log</a> if you have to reset the console and load a safety save.<br>
			<br>
			A one-character hero name is optimal, but using a slightly longer name doesn't add on too much time.  Any time the hero's name comes up in the field, you'll lose one frame per extra character, which adds up a bit with all of the treasure chests you open, items you use and buy, each of the hero's level ups, etc.  Fortunately, the hero's name is never mentioned in the first half of the game, and during combat (except level ups/item drops), all text is printed instantly instead of one character per frame, so no time is lost during combat. As a rough estimate, I'd say using a 4-5 character name costs you less than a minute, but it's a much more substantial time loss than the hero's gender.<br>
			<br>
			The hero's gender doesn't affect the run much, except for <a href="#" data-toggle="tooltip" title="Celia tells you she's &quot;always thought of you as a little sister&quot; and costs you over 65 frames (one frame per 65 text characters, plus a few more frames to scroll each line of text).">one sentence of text</a> in the beginning of Chapter Five that doesn't show up if you're male.  The game has very few <a href="#" data-toggle="tooltip" title="There are a few messages such as &quot;Solo searched the ground beneath feet [sic]&quot; (whose feet?!) that just omit the pronoun instead of using a unisex pronoun.">gendered pronouns</a> in it, so you don't have to worry about the length of "he" vs "she".  In total, the time lost by picking a female hero over a male hero is estimated to be less than two seconds.<br>
			<br>
			"Message Speed" is better-described as "Battle Speed", because it doesn't affect the speed at which text is printed at all.  As you move from Message Speed 1 through Message Speed 7, the game adds an increasingly longer delay between messages displayed in battle.  On Message Speed 8, the game will stop completely and wait for you to press A before displaying the next message ("Manual Message Speed").  Without a turbo controller, if you mash A quickly enough, MS8 is still a little bit faster than MS1, but you probably don't want to mash A as quickly as possible for 6-8 straight hours.  Now that turbo controllers are allowed, MS8 is easily the fastest option (Battles are up to 5-10% faster), but without turbo, it really comes down to player preference.<br>
			<br>
			If you do want to use turbo, note that MS8 saves more time when you're running from fights than when you're fighting.  Use of a turbo controller would still put MS8 as faster than MS1 when fighting, but at a <a href="#" data-toggle="tooltip" title="I did some scripted timing with 6Hz mashing speeds, but a human focusing on mashing should be closer to 10Hz.">decent human mashing rate</a> you actually lose time fighting some battles on MS8 over MS1.  You might consider switching message speeds (press Select during combat) to MS1 after picking up the Sword of Malice in Chapter One, and swapping back to MS8 after reaching Frenor in Chapter Two.  That's the longest section of the run where you're fighting (almost) every battle you encounter.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Timing begins when you select your message speed (or select your file).</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Dragon Warrior IV uses "Game Start to Last Input" timing, so we don't run the timer while creating our character.  Start your timer as you press A to either select your message speed, or to load an existing <a href="#" data-toggle="tooltip" title="Meaning, a file that starts with the king talking to Ragnar.  Obviously, you cannot tamper with the savefile or start from a file that saved at the church in Burland.">new game file</a>.  Note that while creating a new file each time you reset is both better practice <a href="#" data-toggle="tooltip" title="Due to how long it takes to unload all of the menus that open up during file creation, it's actually half a second faster to start timing off of Continue a Quest versus the Message Speed screen.">and <i>technically</i> affects timing</a>, no ruling has been made against using an existing new game file, so assuming you don't make any safety saves, you don't have to re-create your file every time you reset in Chapter One.
			</div>
		</div>
	</div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-12">
			<h3>Chapter One</h3>
		</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Sell Ragnar's Copper Sword for a Wooden Hat, and equip the hat.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			To optimize this chapter, we're not going to kill anything until we pick up the Sword of Malice, and the defense power granted by the Wooden Hat combined with Ragnar's high starting HP will make us durable enough to get to it at level one.<br>
			<br>
			Even though we will deathwarp later, we equip the wooden hat to avoid as many of the the <a href="#" data-toggle="tooltip" title="When Ragnar takes damage, you lose about one second to the screen shaking.  With the Wooden Hat, you will have more defense power than the attack power of the enemies around Burland, so you will only take (one point of) damage about 1/3 of the time you're attacked.">screen-shake damage animations</a> as possible.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="aggro-strat">For a more aggressive start, unequip all of your armor during this walk so that the damage you take contributes to quickening the upcoming deathwarp, but you're very likely to die and reset.  I do not recommend this unless you're already willing to reset over <a href="#" data-toggle="tooltip" title="I generally reach Izmit for the first time between 2:30 and 3:30, so I tend to reset if I'm on the worse end of that range.  If you fail to run enough times to die without armor equipped, you were probably not reaching Izmit before 3:15 anyway.">encounter/run failure RNG</a> in the first chapter.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Take seventy steps on top of the castle and enter Izmit at night.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			We want it to become night time right when we arrive at Izmit, and walking on the castle tiles on the overworld will progress time without triggering random encounters.  Unfortunately, there's <a href="#" data-toggle="tooltip" title="There's a 1/32 chance of time not passing.">some RNG involved</a> with whether time passes when you take a step, but <a href="#" data-toggle="tooltip" title="54 steps to Izmit + 70 steps on the castle = 120 steps to night + 4 extra steps, should be about a 49% chance of not needing any extra steps.  Two more steps makes it 83%.">70 steps</a> will usually make it turn night within a couple steps of town.  Time does progress when you step to enter town, so if it's not night by the time you're adjacent to the town, you can either take extra steps in the grass and risk an encounter, or risk the timeloss of entering and exiting the town once or twice.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Talk to child running around in Izmit's schoolyard.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			He can be tricky to catch, but <a href="#" data-toggle="tooltip" title="In general, you should always buffer menu openings this way, but be careful not to absent-mindedly hit A while walking around if you don't want the menu to open.">if you press A while walking your menu will open automatically</a> when you run into him.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Remove Ragnar's Leather Armor and Wooden Hat and deathwarp to return to Burland.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Walking into the brush (west) will usually get you an encounter faster than walking into the trees (east).  Take any encounter you get, and attack yourself until you're dead.  Stumps and babbles are the best, but even a single Slime will kill you pretty quickly.  On the last turn of the fight, if you think Ragnar isn't going to get a turn before he dies, attack the first enemy for faster menuing.  Rats and babbles will almost always go first, stumps should always go last, and everything else is iffy.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="todo">
				TODO: There are two encounter zones out here that have the same monsters (second starts two tiles east of the sign).  Does one have a more favorable distribution of those monsters than the other?
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Talk to Flora.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Flora's the lady walking on the path outside of her house south of the church.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Re-equip the Leather Armor and Wooden Hat.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			At this point, we want to take as little damage as possible, so definitely re-equip here.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Grab the 40 gold chest on the way to Izmit.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			It's the chest you practically tripped over on your first pass, near the exit of the cave.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Buy five Medical Herbs and talk to Alex.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			The item shop is on your immediate left upon entering town.  Herbs are the first item in the list, so you'll <a href="#" data-toggle="tooltip" title="This is something to keep in mind throughout the entire game if you aren't using turbo on A.  You can always hold A while text is scrolling, but you'll have to mash when a Yes/No prompt pops up.">mash A through the prompts and hold A through the text messages</a>. (Or use turbo)<br>
			<br>
			Alex is down the staircase in the northeast between the armor shop and the church.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Go into the hidden playground.  Get the Flying Shoes first, then Healie.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			There aren't any random encounters along the path to the shoes, so get them first.  Don't be afraid to use an herb on the way to Healie if you're on a decent pace and lose a chunk of health to the first enemy you encounter.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Unequip Ragnar's gear and deathwarp to get out of the playground.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			This deathwarp is tricky because Healie with heal you if you are at 12 HP or fewer, at which point you're counting on run failures to kill you.<br>
			<br>
			Start by <a href="#" data-toggle="tooltip" title="When you cross from one room into another, there is a 4x chance of getting into a fight compared to the area's normal encounter rate.  These &quot;transition&quot; steps also ignore the reduced encounter chance you otherwise have on your first three steps after a battle.  It only takes 2-3 steps' worth of time to reveal the next room and hide the one you're leaving, so it's much faster to get into a fight by crossing rooms like this.">walking back and forth on the partition</a> between Healie's room and the hallway you came through, on the <a href="#" data-toggle="tooltip" title="The game will have to reveal/hide slightly fewer tiles per transition if you stand at the top here, so unless the deathwarp happens immediately it's worth the 16 frames to take one more step north.">top tiles</a> of the partition.<br>
			<br>
			You want to run from any encounter that doesn't contain two enemies that aren't Healers, ideally two Sizarmages or two <a href="#" data-toggle="tooltip" title="NOTE: Lethal Gophers will independently choose a target at the beginning of the battle and will never switch targets until the target is dead.  If you see a Lethal Gopher attack Healie, disregard it entirely when deciding whether to attack yourself or run.">Lethal Gophers</a>.  If you find a Lethal Gopher targetting Ragnar, you may even consider letting Healie heal you once for the chance the gopher will kill you a couple rounds later with a built-up attack.  If you ever fall under 7-8 HP, start running no matter what you encounter, as all enemies (even Healers!) can deal seven damage in one attack.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Re-equip your gear, and use the Flying Shoes.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				If Healie manages to die during the deathwarp (it happens) or in Loch Tower and you're in a race/marathon no-reset scenario, it's best to walk outside Burland and punch stuff to death for the 10 gold to revive him.  Do not enter the tower with him dead.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Walk to the Sword of Malice chest, collecting the Scale Shield along the way.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				The scale shield is on F2 (third floor from the top) in the central section; you can't miss it.  The Sword of Malice is in the NW corner of the ground floor.<br>
				<br>
				The top two floors of this tower have easier enemies than down below, so don't worry about health too much.  Ducksbills' Sap is really the biggest concern up here.<br>
				<br>
				The bottom two floors are a bit more dangerous.  Without the scale shield, you can get hit for up to 9 damage (7 damage with it) by Pixies, Giant Bantams, and Lilypas.  Giant Bantams also have a <a href="#" data-toggle="tooltip" title="1/2 chance to use SleepHit, 1/3 chance for it to put you to sleep.">1/6 chance</a> to put you to sleep when they attack.  I recommend keeping your combined HP above 40 on these floors.  For safety, you can equip the Scale Shield as soon as you pick it up.<br>
				<br>
				Remember that your inventory should be full after you pick up the Flying Shoes, so you need to use at least one herb by the time you open the Scale Shield chest, and at least two before the Sword of Malice chest.  Don't be afraid to use one or two extras, but save at least one (ideally two) to heal before the boss.<br>
				<br>
				You can also let Healie heal you before running, if you need to.  Keep in mind that Lilypas and Pixies will sometimes waste one turn each casting Upper and SpeedUp, respectively, but also keep in mind that Pixies will almost always outrun Healie after casting SpeedUp.  Additionally, if you run into one or two Ozwargs, parrying can be a good idea whether you need Healie to heal you or not, because getting targetted with two Icebolts averages 26 of Ragnar's 27 HP.  After they burn their spells, feel free to parry again to let Healie do his thing, because an Ozwarg's physical attack is useless.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Equip Sword of Malice and Scale Shield, and grind to level 6.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover">
				<thead>
					<tr>
						<th>Enemy</th>
						<th><a href="#" data-toggle="tooltip" title="75% of max.  I'm not positive how the game rounds this; I just rounded all decimals up.">Min HP</a></th>
						<th>Max HP</th>
						<th><a href="#" data-toggle="tooltip" title="Healie has 18 agility, so the faster enemies have a decent chance to act before him.">Agi</a></th>
						<th>EXP</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Ozwarg</td>
						<td>25</td>
						<td>33</td>
						<td>14</td>
						<td>18</td>
						<td><a href="#" data-toggle="tooltip" title="81.6% Probability">Casts Icebolt once</a>, can fail to cast it once more.</td>
					</tr>
					<tr>
						<td>Giant Bantam</td>
						<td>24</td>
						<td>31</td>
						<td>18</td>
						<td>20</td>
						<td>Physical attack puts target to sleep <a href="#" data-toggle="tooltip" title="3/6 of the Giant Bantam's action slots are SleepHit, which procs 1/3 of the time.">1/6 of the time</a></td>
					</tr>
					<tr>
						<td>Pixie</td>
						<td>22</td>
						<td>29</td>
						<td>15</td>
						<td>16</td>
						<td><a href="#" data-toggle="tooltip" title="30.6% probability (It can't flee at these levels)">Casts SpeedUp once</a>, does NOT fail to cast it once more.  Focuses one target until it dies.</td>
					</tr>
					<tr>
						<td>Lilypa</td>
						<td>16</td>
						<td>21</td>
						<td>20</td>
						<td>13</td>
						<td><a href="#" data-toggle="tooltip" title="48.5% Probability">Casts Upper once</a>, does NOT fail to cast it once more.</td>
					</tr>
					<tr>
						<td>Ducksbill</td>
						<td>17</td>
						<td>22</td>
						<td>12</td>
						<td>14</td>
						<td><a href="#" data-toggle="tooltip" title="24.1% probability (It can't flee at these levels)">Casts Sap once</a>, can fail to cast it once more.</td>
					</tr>
					<tr>
						<td>Healer</td>
						<td>12</td>
						<td>16</td>
						<td>12</td>
						<td>7</td>
						<td>Casts Heal (66.8% chance)</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
				Note: If you equipped Scale Shield earlier, you'll save some time equipping Sword of Malice during battle instead of through the main menu.
			</div>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="row">
			<div class="details">
				For this grind, you want to walk between the Sword of Malice room and the main room, using the top tiles, similar to the Healie deathwarp.  You're hoping to encounter anything that isn't a Giant Bantam.  I run from groups of two Giant Bantams because of how much time and MP you lose if they put Ragnar to sleep, and occasionally from the Bantam/Lilypa/Healer/Healer fight as well.<br>
				<br>
				Using the Sword of Malice as an item will cast Firebal, but I never use this effect EXCEPT on the Healers in the Bantam/Lilypa/Healer/Healer formation.  Basically, anything that would die to two rounds of Firebals but not two rounds of sword hits has resistance to the spell, so the sword wins.  A double-upper'd Lilypa is maybe another exception, but it's about a 50/50 to kill a Lilypa with Firebal, and it's extra menuing versus just attacking.<br>
				<br>
				The general order to focus enemies in is: Healers > Ducksbill > Bantam > Lilypa > Pixie > Ozwarg.  Healers only show in the formation mentioned above and they'll heal the Bantam, so kill them first.  Ducksbill cast Sap which will double the damage you take, but they should die in one attack.  Giant Bantams can waste a ton of time if they put you to sleep, so they get priority over Lilypas even though Lilypas <a href="#" data-toggle="tooltip" title="Unless they Upper themselves">should also die in one hit</a>.  Pixies generally take two hits to kill and tend to <a href="#" data-toggle="tooltip" title="I say they waste a turn, but keep in mind this spell makes all enemy monsters significantly faster than Healie.">waste a turn on SpeedUp</a>, so leave them alone.  Ozwargs' Icebolt hurts, but they take two hits to kill so they're almost guaranteed to get it off, and after they do, they're useless.<br>
				<br>
				Once Healie drops to 6 MP, or one battle after hitting level 5, start heading toward the boss room, stopping at the healing tile along the way.  It's generally not any safer running in this dungeon than fighting, so you may as well get the rest of your level while walking to the boss room.  You should definitely not chance the double Giant Bantam fight, though, or you risk having to backtrack to heal again.  Use herbs on both characters before going downstairs to the boss, prioritizing Healie if he's at 17-23 HP.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="todo">
				TODO: How does the game round the minimum HP Healie will heal Ragnar at?<br>
				TODO: Have I frame-counted the two options for screen transitions?  The outside of the tower being grass instead of black may result in it not mattering.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Defeat Saro's Shadow (250 HP/42 HP).</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover saro-shadow-bg">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>MP</th>
						<th>Atk</th>
						<th>Def</th>
						<th>Agi</th>
						<th style="width:120px">Attacks</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Saro's Shadow</td>
						<td>250</td>
						<td><a href="#" data-toggle="tooltip" title="Monsters with 255 MP do not expend MP when they cast spells, effectively granting this enemy unlimited MP.">255</a></td>
						<td>52</td>
						<td>36</td>
						<td>16</td>
						<td>Blaze (1/6),<br>Attack (2/6),<br>Firebal (1/6),<br>Fire Breath (2/6)</td>
						<td></td>
					<tr>
					<tr>
						<td>Giant Eyeball</td>
						<td>42</td>
						<td>0</td>
						<td>29</td>
						<td>32</td>
						<td>20</td>
						<td><a href="#" data-toggle="tooltip" title="92.9% Probability if below 1/3 health.">Change Expression</a>,<br>Attack,<br>On Guard</td>
						<td>Changes expression below 1/3 health.  See below for AI explanation.</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				This fight is complicated, but since you're a Dragon Quest soldier, your flowchart is pretty simple. High-level overview:  You're going to <a href="#" data-toggle="tooltip" title="I've toyed with killing the Shadow first to make the enraged eyeball safer, but eyeball first is definitely faster and safer overall.">attack the Giant Eyeball until it dies</a>, and then attack Saro's Shadow until <i>it</i> dies.  Since your agility is <a href="#" data-toggle="tooltip" title="Eyeball 20 agi > Healie 18 Agi > Shadow 16 Agi > Ragnar ~7 agi.  Ragnar CAN go first, but never count on it.">very low</a>, there's very little else you can do to influence the outcome of this fight, but I'll explain the mechanics you're dealing with anyway.<br>
				<br>
				First thing first, kill the Giant Eyeball by attacking it <a href="#" data-toggle="tooltip" title="hopefully">twice</a> with Ragnar.  The eyeball will enrage if it drops under 33% health (1-14), which causes it to heal to 30 HP and switch to a double <a href="#" data-toggle="tooltip" title="Unconfirmed, but I believe it drops to 3 attack power and picks up the Ogrebasher's 10x damage 100% crit ability (enemy crits deal half damage: 3 * 10 / 2 = 15).">crit-or-miss</a> attack pattern, but there's little you can do to avoid it.  Two full physical attacks from Ragnar at level six should kill the Giant Eyeball, but it can parry to take half damage, which almost always knocks it into its transformation range.  If that's not bad enough, the eyeball will occasionally "cheat" and take half damage <a href="#" data-toggle="tooltip" title="Think, the parry/fight glitch from DW3.  It's basically the same thing.  Healie can do something similar, but it's rare and works differently.  Healie decides at the start of the round and then again when he acts whether or not he's parrying, so sometimes at the start of the round he'll take full damage, and then parry on his turn and start taking half damage.">even though it attacked you</a>.  Because of this strange behavior, I'm uncertain about the <a href="#" data-toggle="tooltip" title="On paper, it's a 29.4% chance of him using his turn to parry, but I don't know the chances of him deciding at the start of his turn to parry.  If it's another 29.4%, that would be about a 50% chance that he parries either at the start of the round or on his action, resulting in my observed roughly-50/50 chance of him parrying before Ragnar's turn.">probability</a> of the eyeball parrying, but it feels like a 50/50.  For bonus points, if he parries an excellent move from Ragnar on turn one, he should always enrage.  The eyeball's usual damage is seven, and his enraged crits hit for 14-15.<br>
				<br>
				The fight is usually over if the eyeball enrages, but if the Shadow is nice to you and you manage to swing for 30 damage (possible with good strength rolls), you might get out of it.  One possible strategy for dodging the transformation if the eyeball parries on the first turn is to use the Sword of Malice and hope for a low damage roll, but if it rolls 18 you'll probably enrage it anyway, and there's a 20% chance the eyeball resists the spell altogether.  In my opinion, you're better off swinging and hoping the eyeball defends again on turn two.<br>
				<br>
				While all this is going on, Saro's Shadow is the actual threat, and can still kill you once the eyeball is gone.  His <a href="#" data-toggle="tooltip" title="All enemies in DW4 have six slots for abilities.  Saro's Shadow uses them randomly, with an even 1/6 chance of picking each one.">six skills</a> are, ordered by threat level:  Attack, Attack, Firebal, Weak Breath, Weak Breath, Blaze.  His attacks will hit Healie for about 17-23 damage, and Healie won't heal himself until he falls under 17 HP, so you really don't want to see him hit Healie.  Firebal is good for 10-18 damage to both characters, the weak breath does 6-10 to both, and Blaze does 6-10 to one target.<br>
				<br>
				Generally, you're just going to attack the Shadow until one of you dies, but there are some situations where you'll want to parry for safety, such as after a Firebal knocks both you and Healie under 20 HP, hoping Healie heals himself and/or the Shadow attacks Ragnar.  If you have decent max HP you might also run into situations where you could consider using an herb on Healie, if Healie is at 17-23 HP.<br>
				<br>
				It's extremely unlikely (<a href="#" data-toggle="tooltip" title="To increase the accuracy of this statement I need to either script the fight to experiment, or re-read the TAS notes for DW3 to remember how the rounding in turn order calculation works.  Assuming Ragnar has 7 agility, I calculated 1.9% based on infinitely-precise random number generation (but the NES always truncates decimals, and we're dealing with small numbers), and 5.4% based on an even distribution of possible initiative values for both combatants.">2-5% chance</a>) for Ragnar to go before the Shadow, so never ever count on it.  If Healie dies, assume Saro's Shadow will physical you for 20 damage every turn when deciding if you need to use an herb or not.  If you don't have extremely high HP (55+) this likely means you're doing the ol' Dragonlord "heal, fight, repeat" strats.  Ragnar's average max HP is 47 at level 6, but as long as you're not more than +/- 5 HP, his HP doesn't swing your odds of winning the fight too much.<br>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="commentary">
				If you die at the beginning of the fight, it's about 3-4 minutes of time loss depending on encounter luck.  You'll almost always be sub 25 minutes finishing the chapter if this boss doesn't kill you, but until your PB is sub 6.5 hours you should definitely allow yourself at least one death to this boss.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="todo">
				TODO: I should do some more analysis on this fight since it was the first thing I ever dug into with emulator lua scripting, but I recall the odds of winning this fight being about 40%.<br>
				TODO: Figure out how the enraged eyeball actually works.  Does its attack power change?<br>
				TODO: Can Healie take half damage <i>after</i> he attacks/heals?<br>
				TODO: Is that damage range on Blaze correct?
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Grab the Wing out of the top of Loch Tower, return the children to Izmit, and end the chapter.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				Exit the tower via the ground floor entrance, <a href="#" data-toggle="tooltip" title="You're wasting them so that Ragnar doesn't use them during battle in chapter five.  At TAS levels of precision, dropping the the herb is eight frames faster than using it on the lead character (The difference is the Use/Transfer/Discard menu), so realistically using them is probably faster.  You'd have to lose no more than eight frames menuing to &quot;Discard&quot;.">wasting the rest of your herbs</a> along the way. Use the shoes, and go down one floor and grab the Wing of the Wyvern, and walk back upstairs.  Jump off the tower, return the children at Izmit, use the wing to go to Burland, and then talk to the king.<br>
				<br>
				Note that if you die while grinding in Loch Tower and have used 3+ herbs, you can pick up this wing of the wyvern early, but it doesn't really save you any time.
			</div>
		</div>
	</div>
	</div>
	
	
	<div class="row">
		<div class="col-sm-12">
			<h3>Chapter Two</h3>
		</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Talk to the left guard at the castle entrance, Cristo, and Brey.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Your movement in the throne room should be to walk down to the wall, then right, then down to the stairs.  If Brey moves down and to the left to meet you, this will potentially save you frames from not having to turn to face Brey when you talk to him later.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Grab the Feather Hat from Alena's bedroom.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Second dresser from the left.  The carpenter should not be in front of the wall unless you missed somebody.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Search the wall to kick it down, and walk to Serene.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="commentary">
			Yes, the town west of Santeem is named Serene.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Buy a Copper Sword for Cristo, and give Cristo's Club to Alena.  Equip A/C.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Copper Sword is the second item in the weapon shop.  After buying it, transfer Cristo's club to Alena and do your equips:<br>
			<br>
			Equip Alena's club and feather hat (Equip -> Alena -> Up, A, A, A, Up, A)<br>
			Equip Cristo's copper sword (Equip -> Cristo -> Up, A, B, B)
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="aggro-strat">
			Once you have a handle on the upcoming grind and the Chameleon Humanoid fight, you can consider selling Alena's Feather Hat for a Thorn Whip.  This will give her enough attack power to reliably one-shot most enemies in the grind, though the Humanoid fight will be a little more dangerous.  If you do sell the Feather Hat, buy a Wooden Hat for Alena once you reach Frenor (selling the Thorn Whip in addition to what you usually sell).  This actually makes the gold routing a lot easier, but you might take more damage in the tournament.<br>
			<br>
			In the upcoming grind for Upper, have Cristo parry or cast Heal every turn.  Don't bother having him club any of the 10-11 HP enemies.  It might be worth having him team up with Alena to take down Troglodytes.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Grind to levels 4-4-3 outside Tempe.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-8">
			<div class="details">
			There are two encounter zones outside Santeem, so head straight north out of Serene to get to the second zone.  When you smack into the ocean, you're one step into the second zone.<br>
			<br>
			There are nine different enemies in this zone, and most of them aren't worth much XP.  The most common enemy formations will be a combination of 10-11 HP, 2-3 EXP enemies.  Your physical attacks from Alena are usually going to start out doing about 7-9 damage, and Cristo 6-8.  Brey's physical will do 0-2, and Icebolt does 10-16.  You don't really want to waste Icebolt, but don't be afraid to use it liberally; it only takes about ten seconds to use the inn in Tempe, and you can lose more time than that if you get into a big fight without any MP.<br>
			<br>
			In general, I have Brey Icebolt the weakest enemies for guaranteed kills, and Alena and Cristo double up on the stronger enemies.  There's a possibility that Alena can knock out a 10 HP enemy herself, but it's not really common enough to try it.  For example, if the fight is Gopher, Gopher, Worm, there's a chance Alena and Cristo could each kill one to make it a one round fight.  However, I generally just assume it's going to take two rounds, even at level 3, so I Icebolt the gopher and have A/C gang up on the worm, then have everyone attack the remaining gopher on turn two.<br>
			<br>
			You should always run from large groups of Kaskos Hoppers.  They're only worth 1 EXP, and they're very dangerous because they usually all attack the same target.  Minons always show up alone or in groups.  At low levels they're really slow to fight but they're worth good gold, so you can either take them or run, but once Brey learns Sap you can throw that at them to speed up the fight.  Troglodytes, I treat the same as the 11 HP enemies, having A/C gang up on them while Brey Icebolts something weaker, if applicable.<br>
			<br>
			The solo Rabidhound fight is straightforward, but in the Hound/Hopperx3 fight I usually Icebolt the hound twice while A/C fight the hoppers.  If Cristo's level 3 (if you think Cristo will definitely kill a hopper in one shot, and A/B/C together will kill the hound in the second round) you might Icebolt a hopper turn one to make turn two go a little faster.<br>
			<br>
			There are a couple items that can drop during this grind, most notably Wing of the Wyvern by Rabidhounds, which saves you 25 gold, and Leather Hats from the Elerats, which can be sold for 48 gold (The 2 defense isn't worth equipping it on Cristo/Brey).  The other enemies just drop herbs.
			</div>
		</div>
		<div class="col-sm-4">
			<div class="table-container">
			<table class="table table-responsive table-hover">
				<thead>
					<tr>
						<th>Enemy</th>
						<th><a href="#" data-toggle="tooltip" title="75% of max.  I'm not positive how the game rounds this; I just rounded all decimals up.">Min HP</a></th>
						<th>Max HP</th>
						<th>EXP</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Kaskos hopper</td>
						<td>6</td>
						<td>8</td>
						<td>1</td>
					</tr>
					<tr>
						<td>Red Slime</td>
						<td>8</td>
						<td>10</td>
						<td>2</td>
					</tr>
					<tr>
						<td>Prank Gopher</td>
						<td>8</td>
						<td>10</td>
						<td>2</td>
					</tr>
					<tr>
						<td>Giant Worm</td>
						<td>9</td>
						<td>11</td>
						<td>3</td>
					</tr>
					<tr>
						<td>Elerat</td>
						<td>9</td>
						<td>11</td>
						<td>3</td>
					</tr>
					<tr>
						<td>Troglodyte</td>
						<td>11</td>
						<td>14</td>
						<td>4</td>
					</tr>
					<tr>
						<td>Minon</td>
						<td>11</td>
						<td>14</td>
						<td>5</td>
					</tr>
					<tr>
						<td>Rabidhound</td>
						<td>18</td>
						<td>23</td>
						<td>7</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="aggro-strat">
			If you sold the Feather Hat for the Thorn Whip, Alena's role stays about the same but Cristo is a little less important.  He can help Alena take out Troglodytes, but otherwise should just parry.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Talk to Tempe's mayor and shaman.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			To trigger the boss fight, talk to the mayor (SE house) and then the priest (N center).
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Defeat the Chameleon Humanoid (23/40/23 HP).</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover chameleon-humanoid-bg">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>MP</th>
						<th>Atk</th>
						<th>Def</th>
						<th>Agi</th>
						<th style="width:120px">Attacks</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Chameleon Humanoid</td>
						<td>40</td>
						<td>6</td>
						<td>28</td>
						<td>28</td>
						<td>50</td>
						<td><a href="#" data-toggle="tooltip" title="81.6% chance if ally is low enough on health, 0% otherwise.">Heal*</a>,<br>Attack (<a href="#" data-toggle="tooltip" title="12.5% if able to cast Heal">70%</a>),<br><a href="#" data-toggle="tooltip" title="SleepHit will put the target to sleep 1/3 of the time.  Effectively, when this boss attacks, there is a 10% chance the target will fall asleep.">SleepHit</a> (<a href="#" data-toggle="tooltip" title="5.5% if able to cast Heal">30%</a>)</td>
						<td><a href="#" data-toggle="tooltip" title="Only the last monster killed drops an item; do not kill the Rabidhounds last.">Drops Lifeforce Nuts (100%)</a>,<br>AI: Will only cast heal on himself below 50% HP (1-19) or on the Rabidhounds below 1/3 HP (1-7).</td>
					</tr>
					<tr>
						<td>Rabidhound (x2)</td>
						<td>23</td>
						<td>0</td>
						<td>19</td>
						<td>18</td>
						<td>7</td>
						<td>Attack (100%)</td>
						<td><a href="#" data-toggle="tooltip" title="Only the last monster killed drops an item; do not kill the Rabidhounds last.">Drops Wing of the Wyvern (100%)</a></td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row ">
		<div class="col-sm-12">
			<div class="details">
				This boss is pretty safe as long as Cristo isn't killed or put to sleep on turn one.  Note that the Rabidhounds do always spawn with their maximum HP, but besides that they're the same Rabidhounds you encounter outside.  The Chameleon Humanoid has a pretty strong physical attack, which has a 1/9 chance of putting the target to sleep, and he'll cast Heal on himself or on the hounds if they fall <a href="#" data-toggle="tooltip" title="These threshhold(s) needs more testing; I've seen him heal himself at 19/40 HP, but he doesn't heal the Rabidhounds until they drop under 1/3 HP.  If Icebolt hits a Rabidhound for max damage (16), it'll barely be knocked into range to be healed.">into low HP</a> a maximum of two times.  Fortunately, the Chameleon Humanoid is fast enough (<a href="#" data-toggle="tooltip" title="The same as a Metal Slime!">50 agility</a>) that he's guaranteed to go first, so it's easy to plan around the Heal thresholds without him unexpectedly taking his action out of order.<br>
				<br>
				The fight should look like this:<br>
				<div class="table-container">
				<table class="table table-responsive table-hover">
					<tr>
						<td>Round</td>
						<td>Alena</td>
						<td>Cristo</td>
						<td>Brey</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>Attack Rabidhound A</td>
						<td>Upper Alena</td>
						<td>Sap Chameleon Humanoid</td>
						<td></td>
					</tr>
					<tr>
						<td>2</td>
						<td>Attack Rabidhound A</td>
						<td>Heal</td>
						<td>Icebolt Rabidhound A</td>
						<td>Rabidhound A dies</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Attack Chameleon Humanoid</td>
						<td>Heal or Upper</td>
						<td>Icebolt Rabidhound B</td>
						<td>Alena attacks Chameleon Humanoid so he doesn't heal Rabidhound B turn 4.  If Cristo doesn't need to heal (Chameleon Humanoid attacked Alena turn 2), consider having all three characters attacking(/Icebolting) Rabidhound B to skip round 4.</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Attack Rabidhound B</td>
						<td>Heal or Upper</td>
						<td>Icebolt Rabidhound B</td>
						<td>Rabidhound B dies</td>
					</tr>
					<tr>
						<td>5+</td>
						<td>Attack Chameleon Humanoid</td>
						<td>Attack Chameleon Humanoid</td>
						<td>Icebolt Chameleon Humanoid</td>
						<td>Repeat until Chameleon Humanoid dies.</td>
					</tr>
				</table>
				</div>
				<br>
				Ideally the fight takes 4-5 rounds, but damage rolls, the Chameleon Humanoid's resistance to Icebolt, and the Chameleon Humanoid's SleepHit can mess things up a bit.  The general idea is to avoid knocking the Rabidhounds under 1/3 HP so that the Chameleon Humanoid doesn't heal, but if he does heal, he's not attacking you, so there's a silver lining there.  If Cristo gets killed or put to sleep before he casts Upper on Alena, you're probably going to lose the fight.  If Brey dies before casting Sap, the fight will be slow, but as long as Upper goes off you should survive.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="aggro-strat">
				If your chapter one was slow, you can try to save a minute or so by trying to fight this boss without Upper, but <a href="#" data-toggle="tooltip" title="I've never scripted this fight, but I've tried it about a dozen or so times in my own bad runs.">in my experience</a> you only have about a 30% success rate without it.  Grinding from Brey's third level to Cristo's fourth takes about two minutes, but you'll need to make up the missing gold and/or EXP after the boss, so you'll have to take an extra fight or two outside Frenor.<br>
				<br>
				Without Upper, the fight should look like this:<br>
				1) Attack Rabidhound A, Attack Rabidhound A, Icebolt Rabidhound A (Rabidhound A dies)<br>
				2) Attack Rabidhound B, Heal, Sap Chameleon Humanoid<br>
				3) Attack Rabidhound B, Heal, Icebolt Rabidhound B (Rabidhound B dies)<br>
				4) Attack Chameleon Humanoid, Heal or attack, Icebolt Chameleon Humanoid (repeat until Chameleon Humanoid dies)<br>
				<br>
				It sounds easy enough, but if anyone's killed or put to sleep, it's over.  Alternatively, you could try the same strat as with Upper, but have Cristo pre-emptively heal himself on turn one instead of casting Upper.  That strat's going to be slower if it succeeds, but might ultimately be safer.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="aggro-strat">
				With the Thorn Whip, the fight should look like this:<br>
				1) Attack Rabidhound A, Upper Alena, Icebolt Rabidhound A (Rabidhound A dies)<br>
				2) Attack Rabidhound B, Upper Alena, Icebolt Rabidhound B (Rabidhound B dies)<br>
				3) Attack Rabidhound B, Heal, Sap Chameleon Humanoid<br>
				4) Attack Chameleon Humanoid, Heal or attack, Icebolt Chameleon Humanoid (repeat until Chameleon Humanoid dies)<br>
				<br>
				Since Alena has significantly less defense, you need two Uppers on her.  If the Rabidhounds aren't killed from an Alena + Icebolt combo, repeat the previous turn.  The Chameleon Humanoid will heal them, so you'll take less damage on the following turn.  The setup is actually safer if the Chamaleon Humanoid heals Rabidhound A on turn two.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="commentary">
				The last thing to mention is that this fight is flagged to have a 100% chance of dropping an item, so make sure you kill the Chameleon Humanoid last, as he drops Lifeforce Nuts, but the Rabidhounds just drop a Wing of the Wyvern.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Grab the Lifeforce Nuts from the altar.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
			Use the inn, revive anyone who died, and search the center tile of the altar before leaving town to the north.<br>
			<br>
			You can either use both Lifeforce Nuts on Alena right away, or savescum them next time you save the game.  Alena's max HP is important, but not as important as her strength; as long as you average 5s you'll probably be okay, but if you scum two sixes it can make the Birdsong Tower <a href="#" data-toggle="tooltip" title="Practically the only things I do in this route &quot;for safety&quot; involve Birdsong Tower, so you should definitely savescum these seeds in your first runs.">a bit safer</a>.  If you're not going to savescum them, try using the first set before you use the inn so you don't have to cast Heal to top her off.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Get Alena to level 6 (50 EXP) before entering Frenor.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			This grind only takes like three battles in Frenor's enconter zone.  Run straight north until you get into the hills to get out of Tempe's encounter zone.  Eight total enemies (6-7 EXP each) should level up Alena.<br>
			<br>
			You can fight just about anything in this zone, but run from groups of 3+ Blazeghosts.  Cast Upper on Alena if there are 3-4 enemies or more.  Never attack Blazeghosts or they'll split (Use Icebolt).  Poison Toadstools can poison you, but don't worry about it.  Be slightly wary of Brahmirds, because they will rarely do a powerful ramming attack <a href="#" data-toggle="tooltip" title="I don't know the parameters or odds of this happening, but someone in my chat once (credible source I know) told me it only happens when they're low.  It seems really rare, but lately I burst them down to avoid it.">at low HP</a>.  Brahmirds also <a href="#" data-toggle="tooltip" title="1/128">rarely</a> drop strength seeds, so always kill them last.  You should also watch out for the formation of five Carnivore Plants, because they like to summon Healers, and if Brey dies you have to keep the healers clear to kill the plants.  Start this fight out cautiously, casting Upper on Alena, Cristo, and maybe Brey as well.<br>
			<br>
			Note that you're about to kill off Brey for a while, so it's ideal if he dies in the last fight of this grind.  If he dies early, it'll slow things down a bit.  If you only need one more fight, switch formation to A/B/C and cast Upper on Alena.  Otherwise, if Brey dies really early or if Alena or Cristo die at all, <a href="#" data-toggle="tooltip" title="For Birdsong safety, do not bail on this grind in your first runs.  Revive everyone and come back outside.">bail on the grind</a> and make due with what you have.  The HP Alena gets from the level can really help in Birdsong Tower, though.<br>
			<br>
			It doesn't really help for Cristo to hit level 6.  Keep in mind <a href="#" data-toggle="tooltip" title="This only takes 27 EXP over Alena's sixth level.">if he does hit 6</a>, you'll need <a href="#" data-toggle="tooltip" title="Revival costs are level squared, rounded up to the nearest multiple of ten, so after losing half your gold to the upcoming deathwarp, you'll need 40 gold instead of 30.">20 more gold</a> to revive him later.  You want to have 453 gold before you enter town, but you <i>should</i> get it before Alena hits 6, and you really don't want Cristo hitting 6.  Just sell the Copper Sword (see shopping adjustments below) if you don't get the gold for some reason.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Trigger the kidnapping scene and use the inn.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Go upstairs at the inn and hit both text triggers so that the kidnappers leave the room.  Then, use the inn and go to the item shop.<br>
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Sell Club and Silk Robe for Chain Mail (A), five Wings (C), Antidote (C), and Medical Herbs (A).</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			<div class="table-container">
			<table class="table table-responsive table-hover">
				<tr>
					<th>Action</th>
					<th>Item</th>
					<th>Character</th>
					<th>Qty</th>
					<th>GP</th>
				</tr>
				<tr>
					<td>Sell</td>
					<td>Silk Robe</td>
					<td>Alena (slot 1)</td>
					<td></td>
					<td>+82</td>
				</tr>
				<tr>
					<td>Sell</td>
					<td>Club</td>
					<td>Alena (slot 2)</td>
					<td></td>
					<td>+22</td>
				</tr>
				<tr>
					<td>Buy</td>
					<td>Chain Mail (slot 5, 350GP)</td>
					<td>Alena</td>
					<td>1</td>
					<td>-350</td>
				</tr>
				<tr>
					<td>Buy</td>
					<td>Wing of Wyvern (slot 3, 25GP)</td>
					<td>Cristo</td>
					<td>5</td>
					<td>-125</td>
				</tr>
				<tr>
					<td>Buy</td>
					<td>Antidote (slot 2, 10GP)</td>
					<td>C, B</td>
					<td>2</td>
					<td>-20</td>
				</tr>
				<tr>
					<td>Buy</td>
					<td>Herb (slot 1, 8GP)</td>
					<td>A</td>
					<td>4</td>
					<td>-32</td>
				</tr>
			</table>
			</div>
			If you started with 453GP, you should have 60 GP leftover at the end, which will be used to revive Cristo later.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
			Adjustments:<br>
			<br>
			If you're short on gold or if you bailed on the grind due to someone dying, sell Cristo's Copper Sword.  You'll have to give up his armor later, but that's less important than Alena hitting level 6.<br>
			<br>
			Obviously, if you got any wings or herbs to drop from monsters, you don't need to buy as many here.  You can sell any other items you picked up, such as the leather hat from Prank Gophers or fairy water from Blazeghosts.<br>
			<br>
			If you sold the Feather Hat for the Thorn Whip at Serene, sell the Thorn Whip at this time and buy a Wooden Hat for Alena.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Equip Chain Mail, save the game, and re-order to A/B/C.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				Equipping Alena's chain mail is very important, so do that, then save at the priest west of the item shop.<br>
				<br>
				If you still have your Lifeforce Nuts, <a href="#" data-toggle="tooltip" title="Save the game, use Lifeforce Nuts, reset the console if you don't get a 6, repeat.">savescum them</a> to get 6s on both.<br>
				<br>
				Re-ordering your party is also very important.  Due to a flaw in the targeting logic, <a href="#" data-toggle="tooltip" title="This refers to enemies that attack the lead character more often than the back character (&quot;Weighted Targeting&quot;).  The only monster in this chapter that does not do this is the Orc, who has an equal chance of attacking each character in the party (&quot;Unweighted Targeting&quot;).  Single-target enemy spells also use unweighted targeting.">most enemies</a> will not be able to attack <a href="#" data-toggle="tooltip" title="This is sometimes described as &quot;Characters behind corpses can't be attacked&quot; for simplicity, but this description is completely accurate.  Only one character is ever protected by this flaw, and the corpse(s) can be leading the party.">the backmost character in the party if anyone is standing behind a corpse</a>, so once Brey dies, Cristo will only take damage from Orcs and spells/other special attacks.  This allows us to <a href="#" data-toggle="tooltip" title="Once she equips the Chain Mail, she has the best defensive equipment available to her in this chapter.">pile defense power on Alena</a> and have her tank <a href="#" data-toggle="tooltip" title="Except Orcs">all</a> of the physical hits while Cristo hangs in the back and heals her.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Grab the Golden Bracelet from the southern cave and deathwarp.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Follow the map below to get to the cave with the lowest possible encounter chance.<br>
			<br>
			You're basically going to run from every enemy in this cave.  The faster Brey dies, the safer this walk becomes, so if you find a fight with a single enemy, use it to kill Brey off before running.  Otherwise, just stop healing him and something'll eventually kill him.  With Brey dead, you don't really need to worry about anything in here unless you get a <a href="#" data-toggle="tooltip" title="...But that'll kill you basically anywhere in this speedrun.">triple run fail</a>.  Keep Alena's HP above 30 or so on the top floor, and max it out on the bottom floor.<Br>
			<Br>
			Once you get the bracelet, deathwarp to return to Frenor.  If your health is maxed out, remove Alena's chain mail, but unless you run into a big group of <a href="#" data-toggle="tooltip" title="These things have very low attack power, and when you're asleep you take half damage, so you don't want to deathwarp on these guys.">Somnabeetles</a> (which is common) that shouldn't be necessary.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
			The chest you pass up on the raised platform is an agility seed, which you can take or leave.  Personally, I only pick it up if I want to <a href="#" data-toggle="tooltip" title="For 67 gold">sell it</a>, but I have to be really hurting for gold to do that.  Three agility can be nice for Sampson and Roric, but one agility doesn't do anything for you, so only use it if you're willing to scum it.  Do not collect any other chests; the wing and magic water aren't worth the encounters, and we'll be back for the 360 gold.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="centered-image-container">
			<img src="images/DW4_Ch2_Frenor_Pathing.png" style="max-width:500px;" />
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Go to the Bazaar: Grab the Strength Seed, talk to the guard, and sell Cristo's sword.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				Hopefully you don't take damage along the way, but don't be shy with Cristo's MP if you do.<br>
				<br>
				The strength seed is in the pot room, left of the lady.<br>
				<br>
				You need to talk to the Santeem guard in the west part of town for the Birdsong Nectar to spawn.  He'll walk up to you, so approach him directly from the east so that he doesn't get in your way.<br>
				<br>
				Go to the item shop in the NW corner past the guard.  Sell Cristo's Copper Sword if you still have it, or his Traveler's Clothes if you don't.  You need 30 gold to revive Brey after Birdsong Tower, (optionally) 8 gold to use the inn in Frenor before entering Birdsong Tower, and 8 gold to use Frenor's inn again after the tower.  The rest, you can spend on herbs, if you were short earlier.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
			If you're planning on doing the Metal Slime grind and have enough extra gold, purchase a Fairy Water.  You'll use it when you walk from Frenor back to the golden bracelet cave.  You'll dodge one or two encounters with it, but it's <a href="#" data-toggle="tooltip" title="If it only dodges one encounter, you maybe save a second or two?  But it also completely prevents worse-case scenarios.">not enough of a time save</a> to make a special trip to pick up the Fairy Water.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Wing to Santeem and walk on the castle until night.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			You can either step in and out of the castle, or take <a href="#" data-toggle="tooltip" title="Mathematically, this is a 13.5% chance, but it seems much higher...">the risk</a> of getting a fight by walking through the grass.  It doesn't really matter.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Trade in the Golden Bracelet for the Thief's Key.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Wing to Frenor and talk to the kidnappers.  Use the inn if needed, and save the game.  The Thief Key will go to whoever had the Golden Bracelet.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="commentary">
			At some point before the tournament, you'll want to move that to someone else, but if you wait until after Birdsong Tower it'll be slightly faster, since Alena may use up the herbs above the key.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Wing to the Bazaar and get the Birdsong Nectar.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="centered-image-container">
			<img src="images/DW4_Ch2_Birdsong_Pathing.png" style="max-width:500px;" />
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="commentary">
			Note, once you cross the first dark red line on the right side of the map above, you pass into a zone with tougher encounters.  The highlighted path minimizes both the number of encounters you'll get total during this walk, and the number of encounters in this zone.  The red line on the left side indicates where you overlap Santeem's encounter zone for three tiles.  Make sure you walk through here, as those encounters are trivial.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			This tower is full of dangerous enemies, so we're not going to spend any more time in here than we need to.<br>
			<br>
			Take the most direct route straight to the Birdsong Nectar.  Do not fight anything, and do not pick up any treasure chests.  We'll be back for the gold and strength seed later.<br>
			<br>
			The bottom two floors of this tower aren't too dangerous, but keep Alena's HP above 30-35 down here.  In order of threat...<br>
			<br>
			Pteranodons have a 55.2% chance to cast Firebal for 10-18 and have enough MP to cast it twice, but they're not as common here as upstairs.  Razor Winds can potentially cast Infernos, but it's only a 1/6 chance for them to cast it, and the damage range is 6-18.  Poison Lizards, as their name suggests, are bad news only if you don't have any antidote herbs.  Flythropes can attack Alena for about eight damage pretty consistently, but they <a href="#" data-toggle="tooltip" title="1/3 chance">sometimes</a> waste their turn on Stopspell.  Spectets are what you want to see in here, as they have several moves that waste turns (Bounce, Hideous Shrieking Roar, Ironize).<br>
			<br>
			The top two floors introduce Butterfly Dragons, which will either attack for about 8-10 damage or breathe fire for 6-10.  It's all the same to Alena, but Cristo's not a fan of the breath.  Pteranodons are also much more common up here, sometimes showing up in triplicate.  Keep both characters' HP maxed if possible.  If Cristo runs out of MP before the top of the tower, you have <a href="#" data-toggle="tooltip" title="Or Cristo still has his Traveler's Clothes to sell.">30 extra gold</a>, and you're concerned about your herb count, you can let Cristo die.<br>
			<br>
			On the top floor, search the bottom-left grass tile in the middle of the room after the Zenithians leave.
		</div>
	</div>
	</div>
	<div class="row">
		<div class="aggro-strat">
			If you're so low on gold that you can't afford to revive Brey, you can pick up the gold and strength seed now instead of waiting until later, but this doesn't save much time over coming back with the Outside spell.  This method has you walking from the chests back to the staircase leading to the 2nd floor, and the other method has you walking from the Bazaar to the 2nd floor and casting three extra spells, but minimizing the amount of time you spend in here at level 5-6 adds a lot of stability to this segment.
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Wing to Santeem and use the Birdsong Nectar in front of the King.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			You can use the wing from the top floor without having to leave the tower.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Wing to the Bazaar and use the inn.  Then, walk to Endor.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Hopefully you have enough gold (16 if Cristo's alive) to use the inn at the Bazaar.  Revive Brey when you get to Endor, and save the game.<br>
			<br>
			If you have any Lifeforce Nuts or the agility seed, savescum all of your seeds for maximum gains on Alena at this time.  Using them now shouldn't affect the stats Alena gets from leveling up.  If you only have the Bazaar strength seed, don't bother yet; you'll scum both seeds after picking up the one in the tower.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Grind to level 11 on Metal Slimes.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			First thing's first:  For your first couple of runs, you may not want to bother grinding on metal slimes.  An alternate grind strat (see below) will give you <a href="#" data-toggle="tooltip" title="In addition to being more stable, the alternate grinds aren't more than 5-10 minutes slower than an average metal slime grind.">more consistency</a> if you just want to complete a few runs.  However, Metal Slimes are the easiest strat to learn, in addition to being potentially the fastest.  The safer routes through the chapter will require you to learn all of the enemies in the chapter before you can get your time down low enough to not be losing much time vs a good metal slime grind, so if you want to jump into doing runs, it may be good to do a few metal slime runs first to get a feel for how much damage most of the enemies do, and what actions they can take.<br>
			<br>
			The "strategy" for this grind is to run outside of Endor to the hills and run from every enemy you encounter until you find a metal slime, at which point you will attack it three times and pray it dies.  After you kill the first one, cast Return to Endor (Brey will learn it), <a href="#" data-toggle="tooltip" title="Ideally you save 24 gold for the Bazaar inn after the grind (Metal Slimes only drop 5 gold) but if Cristo has no MP, use the inn now.">use the inn if needed</a>, save the game, and resume the hunt.<br>
			<br>
			The metal slimes show up about 9.5%-10% of the time, and have a 50% chance to run.  With 50 agility, they will almost always go first, though after you kill the first one, Alena will have enough agility (18-22) to occasionally go first, but it won't happen often.  Additionally, Metal Slimes have a 50% chance of having either 3 HP or 4 HP when the fight begins, and each time you attack you have a 1/3 chance to deal one point of damage after your 1/64 chance of getting a critical hit (level/256 for Alena) fails.  All in all, the odds of killing a Metal Slime work out to about 14%, once encountered.<br>
			<br>
			As far as the other encounters here, you don't want to fight anything here, so all you're watching out for are formations where you want to reset the console immediately upon run failure instead of waiting to see if you survive, running again, <i>possibly not even succeeding</i> on the next run attempt, and then having to cast Heal up to three times outside of battle.  Example formations are:  4-5 Armor Scorpions, 4 Rogue Knights, anything with 2+ Pteranodons, formations of 6-8 Rogue Knights + Healers... When you fail to run in chapters 1-4, there's a 25% chance for each monster to not take any action at all, but when you're resetting, you shouldn't count on more than one enemy to not act.<br>
			<br>
			As for the enemies themselves, Scorpions deal decent damage and have a <a href="#" data-toggle="tooltip" title="4.2%">chance</a> to get critical hits.  Rogue Knights have higher attack and a lower crit <a href="#" data-toggle="tooltip" title="1.85%, counting the chance to call for help.">chance</a>, but will waste turns calling for Healers.  Healers waste a lot of time tickling each other.  Skeletons usually show up in pairs with no backup and will always cast Defense on turns one and three, so if they don't kill you on turn two, you're fine.  Pteranodons and Razor Winds, you know from Birdsong Tower.<br>
			<br>
			After this grind, and all of your Lifeforce Nuts and Strength Seeds are used, you're going to want to have 80 HP and 42 strength (80 attack power) minimum, and the higher the better on both.  Two more strength makes a big difference, and if you have two <i>less</i>, you're going to want to consider grinding to level twelve, lest you need to rely on a critical hit on Roric or Sampson in the arena.<br>
			<br>
			If Brey survives both Metal Slime fights, you won't have much trouble leveling to 12 off normal encounters.  Do the other pre-tournament errands, including buying the Iron Claw, and then go outside the Bazaar to grind.  After Brey gets Snowstorm at level 11, move to Endor.  Cristo should cast Surround on Sandmasters, Armor Scorpions, and Rogue Knights.  Brey should cast Icebolt/Snowstorm on just about everything but Skeletons (use Sap instead).
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
			There are a couple different alternate strats for this grind floating around.  Some simply fight every encounter in this chapter, and some do a hybrid of killing metal slimes and grinding on other enemies.  The next box will outline an old strat, but you may want to look around at more recent runs for more ideas.  I'm personally not a fan of any strat that kills off Brey, because it costs time later, especially if Mara dies in the lighthouse and doesn't learn Outside, but all of the alternate strats I've seen seem to be no more than 5-10 minutes slower than an average metal slime grind, so if you just want to get as decent of a time as you can get while consistently finishing runs, metal slimes may not be the right route to take.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
			I'm <a href="#" data-toggle="tooltip" title="I've only tried this grind a few times, and never really paid attention to other players as they were doing it.  Most of what I've written below is based on speculation after reviewing the enemies in each zone of the chapter, and not on practical/observational data.">not very practiced</a> on the alternate grind strats, but the general idea is that you keep Brey dead, buy the Iron Claw, beat up a few Grislysabers in Birdsong Tower, buy a Morning Star for Cristo, and then grind outside Endor.<br>
			<br>
			The reason you're going for Grislysabers is because they don't have spells, and they call for backup.  This means they'll only attack Alena if Brey is dead and Cristo is in the back of the party, so you can parry and stack Upper on her while they call for help.  Only one of their six attack slots is occupied by the Reinforcements skill, so you'll want to keep at least two of them alive.  They also have about a 1/24 chance to get a critical hit for about 35 damage, so keep Alena's HP high.<br>
			<br>
			Grislysabers are worth 30 XP and 46 Gold each.  Exactly 30 Grislysabers will get Alena to level 9 from level 6, and give you just enough gold to buy a Morning Star.  The Grislysabers can crit for about thirty damage, so I would recommend splitting the grind into two fights to get Alena some more HP for the back half.  After 16 kills, she should reach level 8, so stop here and go downstairs to the tower's inn before starting the next fight.  After 30 total kills, go to Endor, restock, buy the Morning Star, and go grind in the hills outside.<br>
			<br>
			You can fight just about everything out here, but run from anything with too many healers (3+?).  Rogue Knights and Armor Scorpions are vulnerable to Surround, so consider using it or Upper against large groups.  Surround has a chance to fail on the knights, so Upper may be better against them.  Don't bother casting Upper against Skeletons, as you should be able to take them down before they do any real damage.  The other two real enemies in this zone are Razor Winds and Pteranodons, which you know from Birdsong Tower.  Razor Winds are pushovers, but Pteranodons can do serious damage to Cristo with their Firebal spell, so prioritize taking them out first.<br>
			<br>
			After 1500 more EXP (~40 enemies) Alena should hit level 11.  The downside to this grind is that Brey isn't going to get any EXP, so you can't use him to power-level past 11 if your strength is bad and you need an extra level.  1100 EXP should get you to 12, so just keep grinding as you were.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Collect the 1200 gold chest and strength seed from Birdsong Tower.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			After killing the second Metal Slime, cast Return to the Bazaar, <a href="#" data-toggle="tooltip" title="If you don't have 24 gold for the inn and don't have 24 MP (to cast Return twice and Outside once), sell something of Cristo's or kill something on the way to the tower and use the inn in there.">use the inn</a>, and head back into Birdsong Tower.  This tower should be a lot safer now, but a double or triple run fail could kill someone, and if Brey dies you have to walk out.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Collect the 360 gold chest from the Golden Bracelet cave.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			If you picked up a Fairy Water earlier, use it now.<br>
			<br>
			Cast Outside/Return to Frenor, and go grab this chest off the first floor.  You may want to kill one group of enemies for some extra gold.  The gold chests give you enough gold for the claw and five herbs, but you only get one try at the tournament if you don't have any extra.  If Cristo doesn't have his Travelers Clothes to sell for emergency money, win one fight for some spare change.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Talk to the King of Endor.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Cast Outside and Return to Endor.  Walk straight to the king and talk to him, and Return to Endor again.  If you have any strength seeds still, go save the game and <a href="#" data-toggle="tooltip" title="Having an odd strength value is generally not more helpful than an even value, so if you have an odd strength value before using these seeds, you can get away with a 2 and a 3.">savescum them to get 3s on both</a>.  As you use these seeds, move anything else in your inventory that isn't equipped (except herbs) to Brey or Cristo.  Alena's inventory should be an equipped feather hat, equipped chain mail, and leftover herbs.<br>
			<Br>
			After this, take the LEFT corridor leading toward the arena.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Grab Lifeforce Nut in Endor.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			The seed is hidden down a staircase beyond the outer wall on the left corridor leading to the arena.  Pop this right away, and continue toward the arena.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Buy an Iron Claw and five Medical Herbs for Alena.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Purchase these from the item shop in the arena.  Equip the claw now if you're curious about Alena's stats and haven't taken a look yet, but otherwise equip it against Hun.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Win the Tournament.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<div id="linguar-tongue"></div>
			<table class="table table-responsive table-hover tournament-bg">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>MP</th>
						<th>Atk</th>
						<th>Def</th>
						<th>Agi</th>
						<th>Attacks</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Hun</td>
						<td>70</td>
						<td>0</td>
						<td>45</td>
						<td>60</td>
						<td>20</td>
						<td>Attack (6/6)</td>
						<td></td>
					<tr>
					<tr>
						<td>Roric</td>
						<td>90</td>
						<td>0</td>
						<td>50</td>
						<td>80</td>
						<td>45</td>
						<td>Boomerang (67.2%),<br>Attack (21.9%), On Guard (10.9%)</td>
						<td>100% chance to drop an herb</td>
					<tr>
					<tr>
						<td>Vivian</td>
						<td>90</td>
						<td>12</td>
						<td>35</td>
						<td>62</td>
						<td>68</td>
						<td>
							Icebolt (54.9%),<br>
							Firebal (22.5%),<br>
							Attack (5.6%),<br>
							On Guard (11.3%),<br>
							<a href="#" data-toggle="tooltip" title="92.9% if low on HP">Healmore*</a>
						</td>
						<td>100% chance to drop an herb<BR>Stops casting spells after running out of MP and failing once.</td>
					<tr>
					<tr>
						<td>Sampson</td>
						<td>90</td>
						<td>0</td>
						<td>58</td>
						<td>104</td>
						<td>15</td>
						<td>Attack, <a href="#" data-toggle="tooltip" title="They say you can use medical herbs, even during battles....">Use Herb</a> (7.4%)</td>
						<td>100% chance to drop an herb</td>
					<tr>
					<tr>
						<td>Linguar</td>
						<td>55</td>
						<td><a href="#" data-toggle="tooltip" title="Linguar has infinite MP, but does not cast any spells.">255</a></td>
						<td>40</td>
						<td>60</td>
						<td>75</td>
						<td>Attack (3/6),<br>Build Up (2/6),<br>Fire Breath (1/6)</td>
						<td>Hides among three illusions, which don't take damage.  "Build Up" is wasted if he moves to a different slot.</td>
					<tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			For the most part, you're going to just mash A until you either win or lose, but there are a couple subtleties with some of these enemies you need to keep track of.  Try not to use any herbs during the first three fights, but if you have to use one, you have to use one.  Also keep in mind fights 2-4 all drop herbs, so definitely don't end those fights with a full inventory.<br>
			<br>
			Hun is a pushover, but will hit you 2-4 times depending on your strength and agility.  Equip the Iron Claw if you haven't already, and attack him until he dies.  Use one herb after the fight unless you crit him immediately.  If that happens, use one against Roric, because he'll drop one.<br>
			<br>
			Roric is where your max HP comes into play.  Hopefully he'll die before you need to use an herb, but he's a bit faster than you, so you should assume he will go before you.  He should go down in five hits, but damage rolls and parrying can make it take more.  Since it's 1v1 combat, you want him to parry, but often he needs to parry twice for the free damage to allow you to avoid one of his attacks.  If you have to use an herb during this fight, you're probably going to need an early critical hit on Sampson to make it through.<br>
			<br>
			You'll probably use two herbs after this fight, but if you dodged an attack and you're over 60 HP after the first one, you can keep the other.<br>
			<br>
			There are two ways to fight Vivian.  The first strategy is to attack her until she dies.  Alternatively, you can parry once or twice so that she spends 8 MP before casting Healmore on turn three.  Either way, you take about the same amount of damage, but if she opens with Firebal, it'll be faster to parry once.  Note that when she's low on MP, she can fail to cast each of her spells <a href="#" data-toggle="tooltip" title="Not positive about this, but I think if she fails a cast, she recognizes that spell and all of the more expensive spells can't be used anymore.  She can definitely fail Healmore, and then fail Firebal or Icebolt later.">one time</a>.<br>
			<br>
			After this fight, use herbs until you're within 15 HP of your max.  Sampson hits for about 20, so using an herb against him will only earn you 10-20 HP.<br>
			<br>
			Sampson is the fight where your attack power really matters.  His defense is so high that even 2 points of strength can shorten the fight by one round, which can let you conserve herbs for Linguar.  The main problem with Sampson is that he can, albeit rarely, <a href="#" data-toggle="tooltip" title="I'm not sure how much his herbs heal him for, presumably 30-40, but if it happens and you don't get a critical hit, you're dead.">heal himself</a> if he's under 50% HP, so before you've dealt over 45 points of damage, heal yourself to full and focus on attacking.  Usually he'll take 6-7 hits to kill, and your average damage will be somewhere in the 13-15 range.<br>
			<br>
			If you have any herbs left, use two.  Then, the last fight begins...<br>
			<br>
			Linguar is pure RNG.  When the fight begins and after every turn of the fight, he creates three illusions and hides among them.  There's no way to manipulate him, and he has an even 25% chance of landing in each slot.  It's always faster to attack A, so the only reason to attack a different target is if he builds up power.  After he builds up power, if he moves to a different slot, he loses the built up power, so you get to make a decision:  Do you want to trade with him, or is your HP low enough that you can't afford for him hit you for double damage?  Essentially, if you're above 40 HP (including unused herbs), attack the one that built up power.  Otherwise, attack any of the others.  If your attack power is high (84+), you might kill him in two hits, but most of the time, it takes three.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Return to Santeem, enter the throne room, and Return to Santeem to finish the chapter.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Congratulations, you get to play the game...<br>
			<br>
			Walk all of the way out of Endor, to the world map.  <a href="#" data-toggle="tooltip" title="It's a few frames faster to give them to Brey instead, but I don't know if he'll use them against Necrosaro.">Use or drop</a> all of Alena's remaining herbs along the way so that she doesn't use them in Chapter 5.  Cast Return to Santeem, and walk to the throne room.  After Brey says his line in the throne room, <a href="#" data-toggle="tooltip" title="The quest trigger to activate the end of the chapter doesn't fire until a few frames after the text box is dismissed, so it's possible to leave after this text without the chapter ending.">take one step or just stand still</a> until your sprites animate once, and then cast Return to Santeem.
			</div>
		</div>
	</div>
	</div>


	<div class="row">
		<div class="col-sm-12">
			<h3>Chapter Three</h3>
		</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Leave Lakanaba and head north to the Iron Safe cave.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Grab the medical herb in the leftmost jar of the bottom floor of Taloon's house.  Make sure you do NOT step in front of Taloon's boss on your way out of town, or he'll drag you inside.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="commentary">
			Make sure you do not kill <u>anything</u> in this chapter!  Taloon should end this speedrun at level one!
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Grab the Chain Sickle and deathwarp.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Make your way through this cave until you reach the treasure chest containing the Chain Sickle, just past the second water trap.  If you need them, you have a medical herb and a lunch that you can heal with.<br>
			<br>
			Note that there are no random encounters on the main floor with the water traps, so you'll have to backtrack up the nearest staircase to deathwarp.  Don't bother removing Taloon's Basic Clothes, but if you still have double-digit HP you can equip the Chain Sickle during battle and hit yourself with it.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Walk south to Bonmalmo.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				Follow the grass path all the way there.  If you happen to get an item shop "encounter" on the way south, do all of the following shopping within the encounter.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Sell Chain Sickle, buy five wings, talk to Prince Reed, and give wing to Tom's Son.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				Sell the Chain Sickle at the item shop for five Wings.  Then, talk to Prince Reed and head into the basement.  In the basement, stand in the "doorway" until the guard walks two steps past you, and then as he moves to the third tile, walk north to the wall and go right, one step past the guard.  Let him take two steps down, and then as he moves again, start walking south and talk to Tom's Son through the bars.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Wing to Bonmalmo, walk on top of the castle until night, and talk to Prince Reed.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Same as you did in Chapter Two, wait for night time so that we can meet with Prince Reed.  He's behind the weapon shop in the top-right corner, outside of the castle.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Wing to Lakanaba and get the dog.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Tom's son in the northeast corner of town will give you the dog.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Wing to Lakanaba, walk to Foxville, and talk to its mayor.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Talk to the mayor from across the table.  Answer yes when the fox asks for mercy, or he'll just ask again.  You'll be given a Full Plate Armor when he leaves.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Wing to Bonmalmo, sell Clothes and Full Plate (<a href="#" data-toggle="tooltip" title="Iron Apron (1500) + Iron Shield (650) + Wooden Hat (120) + Bronze Armor (700) + Two herbs (16) + one Wing (25) + Endor Inn (6) - 287 gold leftover from the Chain Sickle = 2730; lowest possible offer over this amount is 2731.">2731</a>), talk to the king, and save the game.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			On your way to the Bonmalmo armor buyer, there's a merchant standing in the hallway.  If he's standing against the south wall, talk to the king first.  Make sure you get at least 2731 gold for the Full Plate.  Sell your Clothes, too, to free up space.<br>
			<br>
			After talking to the king and selling your armor, save the game to set a respawn point and walk to Endor.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
			If you have the hang of this chapter and want to add in a very minor optimization that requires you to think about what you're buying later, you can accept an offer of 2695 gold if you buy an extra Iron Shield at Endor instead of the Bronze Armor.  A detailed explanation on how this merchant works will be given during the iron apron grind, but ignoring the merchant's "crit chance", this iron shield strat increases your odds of getting an acceptable offer from roughly 5/27 (19%) to roughly 6/27 (22%).  The time save and and the gold you lose in exchange are both negligible.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Walk south to Endor and use the inn.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			If you die on the walk to Endor, just reset the console.  Use the inn regardless of whether you take damage: resetting the time of day will let you reach the Silver Statuette cave before night, reducing the chance of encountering Blazeghosts.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Buy the Following at Endor: Bronze Armor, Iron Apron, Iron Shield, Wooden Hat, Herbx2, Wing.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Purchase the Bronze Armor first so that you can equip the Iron Apron faster.  You can get a third herb instead of the wing for more safety, but it's usually not necessary.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Use the Prince's Letter in front of Princess Mia.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			This will trade the letter for the Royal Scroll.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Wing to Endor and go to the Silver Statuette cave.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Cross the eastern bridge and head all the way north to reach the cave.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Collect Wing, 760 gold, Iron Spear, and Silver Statuette, and Deathwarp.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			The first chest you pass has a Wing of the Wyvern in it.  Grab it if your inventory's not full.  After hitting the button, skip the leftmost chest on that floor (Morning Star), optionally grab the Medical Herb (south-center), and grab the 760 gold chest (center) and Iron Spear (northeast).  Head down two floors to get the Silver Statuette, and deathwarp to Bonmalmo.  For the deathwarp, remove your armor and don't bother equipping the Iron Spear.  If you happen to encounter only one enemy, equip the spear and attack yourself, but otherwise just mash A to attack the first enemy since Taloon is going to act last.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Use the Royal Scroll in front of the King of Bonmalmo and sell all armor items.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Obviously, sell the armor to the castle armor buyer.  Try to get more gold than you paid for all of the armor you're carrying.  Go for 1700+ on the iron apron, 700+ on the iron shield, 800+ on the bronze armor, and 100+ on the wooden hat (which you bought for 120 but don't worry about it).  Gold isn't "tight" here, but you're trying to amass as much money as possible in the next segment, so you have to weigh the offers you're given against the odds of quickly getting a better offer if you reject it.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Wing to Endor, buy another wing, and hand in the Silver Statuette.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			The old man in the building east of the item shop will buy the statuette off you for 25000 gold.  However, we need to turn that into 36000 gold...
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Purchase seven Iron Aprons, talk to the King of Endor, sell the Aprons at Bonmalmo, and buy two Wyvern Wings.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			
			<br>
			You're going to be doing this process at least twice -- almost always three times -- so you'll get used to it quickly.  The goal here is to get 35,000 gold to buy a shop in Endor, which we can then use to print our own money, but on top of that we'll want to at least buy an Iron Shield to get the shop primed.  The more leftover money you have, the better, so don't be afraid to do this segment one more time if you have enough to buy the shop, but not enough to buy a shield.<br>
			<br>
			The shop works like this:  Every time you sell something to him, <a href="#" data-toggle="tooltip" title="Sometimes referred to as a &quot;critical hit&quot;.">it rolls a 1/32 chance</a>.  If that hits, the old man will offer you a random value between 150% and 200% of the item's price (the price you would pay to buy it from a store).  If it misses, he will offer between 84% and 125% of the item's price.  For Iron Aprons, this means he'll usually offer 1265-1875 GP, but will sometimes offer 2250-3000 gold.  In terms of <i>profit</i>, these ranges are -235 to 375 GP, and 750-1500 GP.<br>
			<br>
			You should need about 7000 gold to get through this segment, which is about what you'll average if you never accept anything under 1750 gold and never get an offer from the higher range.  It's fairly safe to put your cutoff at 1700 and assume you'll get one or two higher offers to raise your average profit enough to proceed.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="todo">
			TODO: Mathematically prove the ideal sell line for Iron Aprons.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Continue to buy and sell Iron Aprons until you have at least 35650 gold.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Again, don't be afraid to repeat the process one more time if you're between 35000 and 35650.  You don't really want to start the next segment with just a Chain Mail.  On your final trip into Bonmalmo, purchase one Wyvern Wing from the item shop before selling the aprons to save a little time.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Wing to Endor, buy armor, and buy the shop.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Spend as much money as you can at the armor shop without dipping under 35000 gold.  Then, go to the shop in the SW corner, talk to the old man who lives there, and buy the shop off of him.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Use your new shop to amass at least <a href="#" data-toggle="tooltip" title="23975 = Seven Broad Swords (14000GP) + Seven Half Plates (8400) + Iron Apron (1500) + three Wyvern Wings (75GP)">23,975 gold</a>.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			To finish this chapter, we need 60,000 gold, and <a href="#" data-toggle="tooltip" title="The alternative is to keep using Neta, which costs you about five minutes.">the fastest way to do that</a> is to fulfill a sidequest for the King of Endor that requires us to buy seven Half Plate Armors and seven Broad Swords.<br>
			<br>
			To get the money for <i>that</i>, we're going to use our new shop.  Every day, you will spend as much gold as you can at the weapon shop, give all of your items (except the lunch she gives you; it's not worth it) to Neta, and then talk to her behind the counter to stay the night.<br>
			<br>
			Mechanically, each night, every item in Neta's inventory has a 75% chance to be sold for a random value between 150% and 200% of the normal purchasing price (the number she gives you is 150%).  You want her to sell everything she has so that your gold can continue to exponentially increase, so you should sleep more than once before collecting your money.  Reference the green cells on the chart below for how to get her to sell her entire inventory with 90% consistency.  Basically, you're going to stay two nights on the first cycle, and then stay three nights each cycle until the final cycle where you should stay a fourth night just to be sure she sells it all.<br>
			<br>
			Never sell or drop the lunch until you have enough gold for eight Abacus of Virtue (12800 GP).  An average sale of eight Abacus of Virtue nets you 9600 GP profit, so if you start the day with 16k GP you will likely hit the 24.6k mark after selling eight more Abacuses, so it's never really worth it to do 9-10 abacuses.  If you barely miss the mark, just sell another 7-8 abacusses, and you'll have some extra gold for chapter five.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12" style="text-align:center">
			<h5>Chance for Neta to Sell Her Full Inventory</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover" style="margin:0 auto;">
				<thead>
					<tr>
						<th></th>
						<th>1 Item</th>
						<th>2 Items</th>
						<th>3 Items</th>
						<th>4 Items</th>
						<th>5 Items</th>
						<th>6 Items</th>
						<th>7 Items</th>
						<th>8 Items</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1 Night</td>
						<td style="background-color:#eeff88;">75%</td>
						<td style="background-color:#eeeeee;">56%</td>
						<td style="background-color:#eeeeee;">42%</td>
						<td style="background-color:#eeeeee;">32%</td>
						<td style="background-color:#eeeeee;">24%</td>
						<td style="background-color:#eeeeee;">18%</td>
						<td style="background-color:#eeeeee;">13%</td>
						<td style="background-color:#eeeeee;">10%</td>
					</tr>
					<tr>
						<td>2 Nights</td>
						<td style="background-color:#90ff90;">94%</td>
						<td style="background-color:#eeff88;">88%</td>
						<td style="background-color:#eeff88;">82%</td>
						<td style="background-color:#eeff88;">77%</td>
						<td style="background-color:#eeeeee;">72%</td>
						<td style="background-color:#eeeeee;">68%</td>
						<td style="background-color:#eeeeee;">64%</td>
						<td style="background-color:#eeeeee;">60%</td>
					</tr>
					<tr>
						<td>3 Nights</td>
						<td>98%</td>
						<td style="background-color:#90ff90;">97%</td>
						<td style="background-color:#90ff90;">95%</td>
						<td style="background-color:#90ff90;">94%</td>
						<td style="background-color:#90ff90;">92%</td>
						<td style="background-color:#90ff90;">91%</td>
						<td style="background-color:#90ff90;">90%</td>
						<td style="background-color:#eeff88;">88%</td>
					</tr>
					<tr>
						<td>4 Nights</td>
						<td>100%</td>
						<td>99%</td>
						<td>99%</td>
						<td>98%</td>
						<td>98%</td>
						<td>98%</td>
						<td>97%</td>
						<td style="background-color:#90ff90;">97%</td>
					</tr>
					<!-- TMI
					<tr>
						<td>5 Nights</td>
						<td style="background-color:#90ff90;">100%</td>
						<td style="background-color:#90ff90;">100%</td>
						<td style="background-color:#90ff90;">100%</td>
						<td style="background-color:#90ff90;">100%</td>
						<td style="background-color:#90ff90;">100%</td>
						<td style="background-color:#90ff90;">99%</td>
						<td style="background-color:#90ff90;">99%</td>
						<td style="background-color:#90ff90;">99%</td>
					</tr>
					-->
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="todo">
			TODO: Explain some Chapter Five equipment options based on how many extra items you take away from this chapter.<br>
			TODO: List how many abacuses gives you how much gold (on average?) so you don't waste time getting too much gold at the end.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Buy Seven Half Plates and a Wyvern Wing.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Annoyingly, Taloon can't equip Half Plates, so there's a lot of text during this menuing.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Talk to the King of Endor, and then the knight downstairs.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			The King will congratulate you and ask you to sell him seven half plates and seven broad swords.  You deliver them to the knight next to the old man on the main floor.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Wing to Bonmalmo, buy another wing and seven Broad Swords.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Taloon can't equip Broad Swords, either, so there's a lot of text during this menuing as well.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Deliver the Broad Swords to the same knight in Endor.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Congratulations, you're rich!  Don't die!
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Purchase Iron Apron, Wyvern Wing.  Spend extra gold (Iron Shield, Fairy Water, more armor).</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			You need exactly the amount of gold the knight gave you (60,000) so spend the rest on an Iron Shield, 1-2 Iron Aprons max, and Fairy Waters.  Having one or two extra Iron Aprons will give you some comfort-gold in Chapter Five, but more is unnecessary.  Fill the rest of your inventory with Fairy Water.  Equip the Iron Apron and Iron Shield.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Deliver the gold to the old man in the cave to the east</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			This is the double-wide cave you passed on the way to the Silver Statuette cave.  Talk to him to give him the money.<br>
			<br>
			If you <a href="#" data-toggle="tooltip" title="This requires a Ducksbill to cast Sap on you, for it to work, and for you to get attacked two more times.  I've seen it happen more than once, but it's not worth a safety save.">die on the way to the cave</a> you'll have to use Neta to work your way back up to 60,000 gold.  It'll take about seven minutes.  The only difference in strategy from before is that it's now worth it to sell more than eight abacuses at a time, and you'll want to sleep like five nights in a row so that she sells them all.  Neta can hold three or four pages of them, so feel free to make more than one weapon shop trip per day.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Exit/Re-enter the cave and talk to him again.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Yay, plot triggers.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Wing to Endor, enter the casino, talk to Neta, and walk through the tunnel.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			More plot triggers.  The casino thing seems arbitrary, but Enix wanted you to waste your extra money in there instead of hauling eight Swords of Malice into chapter five.  If you don't enter the casino, Neta will tell you to go check it out.
			</div>
		</div>
	</div>
	</div>
	
	
	<div class="row">
		<div class="col-sm-12">
			<h3>Chapter Four</h3>
		</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Collect a medical herb from nearest pot in starting house, gold from the chair in the theater, and a strength seed from a drawer backstage.</div>
	</div>
	<div class="detail-container">
	<div class="row">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			See image below for the location of the gold.  The strength seed is in the drawer above the empty stool.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="centered-image-container">
			<img src="images/DW4_Ch4_Gold_Location.png" style="max-width:500px;" />
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Walk north to Kievs.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			There's a reduced encounter rate around Monbaraba, so sometimes you'll get all the way there without an encounter.  If you find a solo enemy you might bop it with Blaze to buy an extra herb, but really you should just run from everything.  If you take damage or use MP, the inn in Kievs is free.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Sell N Copper Sword, N Strength Seed, M Dancer Costume.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			See below...
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Purchase Leather Dress, Feather Hat, 5 Herbs for Mara; 2 Wings, antidote herb for Nara.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			The Dancer Costume is way overpriced for its defense, so we're selling it and our offensive items to buy more armor.  This will allow us to run down and pick up Orin at level one.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Re-order and Grab the Lifeforce Nut from the nearest jar in the northern house and use it.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Here, you need to decide <a href="#" data-toggle="tooltip" title="Disclaimer, I almost always go with Nara, so I'm not very experienced with Mara being the higher level in chapter five.">which of the two sisters</a> you're going to have survive the Balzack fight.  Nara is a little safer because you'll have <a href="#" data-toggle="tooltip" title="For the Lighthouse boss fight, the sister who survives Balzack will be about level 7 and the other about level 5.  This is a difference of 8 MP for Nara.">more MP in chapter five</a>.  Mara is potentially a little faster because she'll have Firebal for the Statuette cave, but you'll also spend some time buying extra herbs for the Balzack fight.<br>
			<br>
			You want Mara to lead the party either way since she has more defense power, but the sister who uses the Lifeforce Nut (the one you want to survive Balzack) should be leading when you open the chest.  Make sure to re-order before you leave town.  If you re-order while facing the dog that follows you, you'll clip through it and save yourself from having to walk around it.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Head to the cave to the west and grab Orin.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			This cave can be a little dangerous, so try to <a href="#" data-toggle="tooltip" title="Or at least in the double-digits.  You don't need to heal immediately after using the Lifeforce Nut.">keep your HP maxed</a> on both sisters.  Nara has no damage, so run from everything you encounter.  Xemimes can steal Nara's MP, so you'll want to use her magic to heal yourself before getting into your herbs.  You can also get poisoned in here, so hopefully that doesn't happen twice.  If Mara dies, give her hat to Nara.<br>
			<br>
			If you wipe in this cave, it's a problem.  You can sell a wyvern wing to revive Nara, or you can go outside and hope four casts of Blaze gets you ten gold.  Either way, the route has no extra wings in it, so you'll need to buy another wing or skip one later.  Plus, you're also likely down some herbs at this point.  Make sure you safety save before trying again.  Note that Kievs has no priest, so you can't save or revive Nara there.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Re-Order party to Orin, Mara, Nara.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Similar to in chapter two, we're going to put Orin in the lead to tank, let Mara die (once she hits level 3) so that Nara can't be attacked, and heal with Nara.  If Mara dies before you talk to Orin, you should order the party Mara/Orin/Nara instead (this saves two presses of the down arrow).
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Grab the Sphere of Silence.  Try to get Mara to <a href="#" data-toggle="tooltip" title="It's absolutely necessary for her to hit level 3 and learn Sap before you fight Balzack.">level 3</a>.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			You can fight anything but Blazeghosts in here, but try to fight the smaller encounters.  You don't need to be picky; Mara will hit level 3 pretty fast.  If Mara doesn't hit level 3 before she dies, don't worry about it; she'll revive after the upcoming deathwarp so you'll get another chance to level her.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
			For safety, especially if you're using Mara against Balzack, you can grab an extra Lifeforce Nut in the room to the right of the second elevator at the cost of about <a href="#" data-toggle="tooltip" title="Since you have to walk through a room partition, you'll probably get into two encounters.">20-30 seconds</a>.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Re-Order Party to Mara/Nara/Orin, unequip armor, and deathwarp.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			This deathwarp can be annoying since Orin attacks every turn, but Nara should fall pretty fast, especialy if you run into a large group of Troglodytes or any number of Blazeghosts.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Revive Nara, Re-order to Mara/Orin/Nara, and re-equip armor.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			If Mara isn't level 3 yet, consider ordering Orin/Mara/Nara instead, and kill something in the Keeleon/Aktemto encounter zones to get her there.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="todo">
			TODO: Consider not suggesting Corpse/Orin/Girl.  EvilAsh points out that healing takes more menuing when you order this way, even though the actual re-ordering is faster.  This one might be worth it, though, since Mara will die more reliably.  You also won't heal Orin in the Sphere of Silence cave.  Maybe only do corpse first in that cave?
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Wing to Kievs, walk to Keeleon and then Aktemto.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			You want Mara to die again, but if she survives the walk, you can just kill her off in the swamp inside Aktemto.  Watch out for King Slimes because they waste a lot of time, but any group of 1-2 enemies is pretty safe to fight.  If a King Slime does form near Aktemto, you may as well fight it, but it'll cast Fendspell to nullify Mara's Blaze, so it's still a slow fight and can easily kill her.  If Mara doesn't hit level 3 before dying, your best bet is to just get the level after you do the mine.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Obtain the Mystic Acorns, Silver Tarot Cards, and Gunpowder Jar from the mine, and Deathwarp.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			You're collecting all three chests in the mine.  You can fight some things if you want, but if you're planning on Mara surviving the Balzack fight, <a href="#" data-toggle="tooltip" title="It also doesn't really hurt, but any EXP she gets only helps you against the Lighthouse Bengal, not against Balzack.">Nara doesn't need more EXP</a>.  Once Nara gets the Silver Tarot Cards, she can provide some decent backup damage, but the bottom floor has some nasty enemies on it, so the optimal time to be fighting encounters is between the Silver Tarot Cards chest and the staircase.<br>
			<br>
			Don't fight any large (3+ enemy) encounters on the bottom floor.  Also avoid Vampdogs because they can put you to sleep, and avoid large groups of Rogue Wispers unless you're desperate for EXP.  Rogue Wispers are harmless, but they have 40 HP so even Orin and Nara (w/ Tarot Cards) attacking together won't always kill them.  A group of seven Wispers is going to take 7-14 rounds to clear out, for only 140 EXP.<br>
			<br>
			This deathwarp will be easy.  If you remove Nara's armor, and re-order to Mara/Nara/Orin, she should get killed in 1-2 attacks.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Revive Nara, Re-order, Wing to Keeleon, and fight Balzack.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover balzack4-bg">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>MP</th>
						<th>Atk</th>
						<th>Def</th>
						<th>Agi</th>
						<th style="width:120px">Attacks</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Balzack</td>
						<td>240</td>
						<td><a href="#" data-toggle="tooltip" title="Monsters with 255 MP do not expend MP when they cast spells, effectively granting this enemy unlimited MP.">255</a></td>
						<td>80</td>
						<td>43</td>
						<td>22</td>
						<td>HealAll (1/6),<br>Attack (2/6),<br>Fire Breath (2/6),<br>Firebal (1/6)</td>
						<td>Will cast HealAll if he's under half HP, so you must use the Sphere of Silence to block his spells.  Unsure how his AI is weighted; he seems to cast Firebal more than 1/6 of the time, similar to some random encounter spellcasters.  Regenerates 16-23 HP per turn.</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			If Mara is not level 3 yet, get that now!  She should practically hit level 3 off of one enemy outside Aktemto, so re-order to Orin/Nara/Mara (preferably before reviving Nara), get her to level 3, safety save, and then continue as normal.<br>
			<br>
			Depending on which sister you decide to have survive the boss fight, re-order to Orin/Mara/Nara or <a href="#" data-toggle="tooltip" title="Untested strat: Nara/Orin/Mara, and give Mara the Sphere of Silence in case Nara gets one-shot?  Saves frames on re-ordering the party but surely loses real time in battle.">Orin/Nara/Mara</a>.  Give all of your herbs to Mara, and the Sphere of Silence to Nara.  If you've got Mara in the back and you don't have at least four herbs, you'll <a href="#" data-toggle="tooltip" title="Again, I don't use Mara, so I'm not 100% sure how this usually plays out.">probably want to buy more</a>.  Also, whoever's in the back should have the Feather Hat equipped.<br>
			<br>
			To get to Balzack, use the Gunpowder Jar just outside the little hallway besides the chancellor's room.  You don't need to actually walk into the hall for it to work.<br>
			<br>
			In the fight itself, on turn one you'll cast Sap and use the Sphere of Silence.  Then, until the sister in the middle dies, have the sister in the back parry while the middle sister deals damage or heals the back sister.  After she dies, the back sister will stop parrying and contribute damage whenever possible.  Make sure you heal Orin if he starts the round with <a href="#" data-toggle="tooltip" title="Balzack's average damage on Orin with a physical attack should be about 29-30, so he could technically kill Orin in two hits from 60, but it's unlikely.  64-66 would be 100% safe.">less than 60 HP</a>, and heal the back sister if she starts with <a href="#" data-toggle="tooltip" title="Another Mara note, at level 3 her max will only be 23 on average, so I'm not sure if you lower the heal line and risk getting killed by his fireball attack, or what.">less than 20.</a>  Finally, note that Balzack regenerates about twenty HP per turn, which is barely less than Orin's damage output, so any damage the sisters can safely contribute will really speed the fight along.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Die to Keeleon.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Don't bother attacking yourself unless you can kill yourself in one turn.  He'll usually cast Firebane and kill you in one round.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Grab the Boarding Pass, talk to Pipin's sister, and talk to the ship captain.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			You can talk to her across the headboard of the bed to save yourself a step.
			</div>
		</div>
	</div>
	</div>
	
	
	<div class="row">
		<div class="col-sm-12">
			<h3>Chapter Five Part One: Assembling the Team</h3>
		</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Talk to your dad, then talk to Mom from across the table.</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Get the Medical Herb from pot in panic room and the Feather Hat from upstairs.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			The Feather Hat is in the bottom-right grass tile in the middle of the swamp.  It's the tile Celia was laying on earlier.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Walk south to the Woodsman's Hut, loot all three jars, and equip the Leather Armor.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			This'll give you a 50 gold, Leather Armor, and Medical Herb.  The encounters outside Endor can hit you pretty hard if you're just wearing Basic Clothes, so equip the armor right away.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Walk to Endor through Taloon's Cave.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Reference the map below for the movement you should take to get to the cave.  There's a reduced encounter rate (25%!) in the areas labeled "18", so we want to stay in there as long as possible.  You're basically walking south to the coast, and then minimizing the number of brush tiles you step on as you make your way toward the bottom-left corner of Branca's cell.
			</div>
		</div>
		<div class="col-sm-12">
			<div class="centered-image-container">
			<img src="images/DW4_Ch5_Branca_Pathing.png" style="max-width:500px;" /><br>
			Credits to <a href="https://www.woodus.com/den/" target="_blank">Dragon's Den</a> for the original map with labeled encounters.<br><a href="https://www.woodus.com/den/gallery/graphics/dw4nes/maps_overworld/dw4_overworld_map.png" target="_blank">https://www.woodus.com/den/gallery/graphics/dw4nes/maps_overworld/dw4_overworld_map.png</a> retrieved 12/31/2018.
			</div>
		</div>
		<div class="col-sm-12">
			<div class="alt-strat">
			When you walk through the cave between Branca and Endor, there's a 1/32 chance that you'll be given two thousand casino coins as you pass in front of the guard.  If this happens, you can use them to buy a <a href="#" data-toggle="tooltip" title="You can afford a second Wizard Ring, but it's not worth the inventory space.">Wizard Ring and Staff of Jubilation</a> at the casino when you pick up Mara.  Both of these items are primarily for safety in the Lighthouse, but the Ring can also help later on if you cut the Hat of Happiness.  The Staff of Jubilation will go to Mara, who can equip it for decent damage, but on top of that, she'll use it in battle to stun enemies, including the Flamers and Lighthouse Bengal, which gives her something useful to do if she's not healing.  Its use effect operates on the same resistance value as Sleep, so it can technically affect Esturk as well, but it's not really worth another character's turn (Hero or Cristo?) in that battle.<br>
			<br>
			Unfortunately, nothing in the casino sells for anything (Staff of Jubilation sells for like seven gold, Magic Potion for 22, and everything else is unsellable), so these are the only items worth considering.  An interesting theory would be to gamble the coins into a Meteorite Armband for the Hero, which would be very helpful once you get the Aeolus Shield, but I'm not sure how much time that's worth.  Two to three minutes at the very most.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Talk to Nara, and say Yes.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="commentary">
			Fun fact, you don't actually have to have ten gold on hand to get your fortune told.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Item shop: Sell Hero's Clothes and Leather Hat; Nara's Mystic Acorns and Silver Tarot Cards.</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Item shop: Buy Wooden Hat (Hero), Wing (Nara), Herb x2 (Hero).</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
			If you have any herbs leftover on Nara or Mara, you can give them to Hero after grabbing Mara instead of buying more.  This helps with menuing a bit because Hero needs to give that feather hat to someone to free up room for the Iron Shield.  You want the Hero's inventory to be full before you leave Endor.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Transfer Feather Hat to Nara, buy Iron Shield from item shop, and equip Hero's armor.</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Use the inn, and Talk to Mara in the casino</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			We're staying at the inn here so that it won't turn night before we reach the Silver Statuette cave, which cuts the chances we encounter Blazeghosts on the way.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Wing to Endor, give the Feather Hat to whichever sister needs it, and equip it.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
			Optionally, you can re-order the party to N/M/H to protect the Hero, but even though Hero has less HP at first, you're not in too much danger, and the menuing works out better this way.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Head into the Silver Statuette cave and grab the Morning Star for Nara (Equip it)</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Change your tactic to Offensive in the first fight you encounter.  Outside of specific boss fight strategies, I'm not going to be mentioning tactics much in this guide, so assume you should default to Offensive or Use No MP based on whether or not you want your team using magic.<br>
			<br>
			If Mara has Firebal, you can fight some things on the way to this chest, but you don't need the EXP that badly.  If Hero's leading and his inventory's full, the Morning Star should go straight into Nara's inventory.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Collect the Broad Sword and Half-Plate Armor Chests.  Transfer Copper Sword/Leather Armor off Hero before opening the chests.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			You want the Hero to hit level three minimum, four preferred, before you get the Half-Plate Armor.  You can fight anything in here, but switch to Use No MP if a Metal Slime shows up.  Equip the Broad Sword during battle, but wait to equip the Half-Plate Armor until after the deathwarp.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Deathwarp to return to Branca.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			If you took all of your herbs off of Nara and Mara, it's easy to kill them off just by attacking them with the Hero.  Don't worry too much about your level here; you can get some extra XP on the way to the Cave of Betrayal.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Revive Nara and Mara.  Sell Leather Armor and Copper Sword first if needed.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			You probably won't have enough gold to revive them both without selling some things first.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Equip Half-Plate!  Purchase a Wing, make sure Hero has four Herbs, and spend the rest of your gold on Fairy Water.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			You need at least ten Fairy Waters in this chapter before the Hero learns Repel, and even then Repel costs a lot of MP, so keep track of how many you've purchased (including extras you've bought in chapters two or three).  You need at least two Fairy Waters now to get to Taloon.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Head to the Cave of Betrayal.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Safety save before leaving town if you want.  If anybody dies on the way to the cave, you'll have to go back and revive them.  You need three living characters in your party to break the blocks in the first room of the cave.<br>
			<br>
			The encounter zone shifts as you reach the junction north of Hector's inn.  There are a few annoying enemies in this area.  Mad Clowns are the real threat, as they show up in pairs, and if they both cast Firebal it will usually kill Mara.  You can decide to either fight or run, but keep in mind that in Chapter Five, <a href="#" data-toggle="tooltip" title="In previous chapters, each enemy had a 25% chance to not act on a run failure (minimum one enemy acting), but in chapter five that stops.">all enemies will attack you on a run failure</a> 100% of the time.  In addition, if Nara has the Sleep spell, it's very effective against Mad Clowns, but the clowns have a ton of agility, and will probably act first.  Giant Eyeballs sometimes show up in this area as well, and can do some damage if they get angry, but they will usually split their damage since you've got three party members in this chapter.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Defeat the two Liclicks.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>MP</th>
						<th>Atk</th>
						<th>Def</th>
						<th>Agi</th>
						<th style="width:120px">Attacks</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>LicLick</td>
						<td>43</td>
						<td>4</td>
						<td>32</td>
						<td>30</td>
						<td>15</td>
						<td>Surround (1/6), Attack (5/6)</td>
						<td></td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Make sure you have Nara heal up the Hero before the party is split, and make very sure you have all of your armor equipped on the Hero.<br>
			<br>
			This fight is obnoxious because they love to cast Surround on turn one.  If you're hit with Surround, stop attacking and switch to casting Blaze.  This is exactly why we bought those herbs, despite learning Healmore at level 5.  You may not have enough MP to kill them both, but after the first one's dead you won't be taking much damage, so you can wait for a normal attack to connect.  They can only cast Surround once each, so if both spells fail on you, consider yourself lucky; that's a decent time save.<br>
			<br>
			Use an herb before the next fight starts.  Hopefully you still have one left.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Defeat the Tricksy Urchins.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover urchin-bg">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>MP</th>
						<th>Atk</th>
						<th>Def</th>
						<th>Agi</th>
						<th style="width:120px">Attacks</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Vampire Bat (x2)</td>
						<td>25</td>
						<td>3</td>
						<td>25</td>
						<td>22</td>
						<td>14</td>
						<td>Attack (6/6)</td>
						<td>May begin the battle confused</td>
					</tr>
					<tr>
						<td>Tricksy Urchin (x2)</td>
						<td>35</td>
						<td>0</td>
						<td>37</td>
						<td>30</td>
						<td>3</td>
						<td>Attack (3/6),<br>Fire Breath (1/6),<br>Build Up (2/6)</td>
						<td></td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			This fight is pretty straightforward because the Vampire Bats can't hurt you, and the Urchins only have three points of agility.  At level five, unless you got extremely unlucky agility rolls, you should almost always outrun them, which allows you to wait until you're pretty low to heal.<br>
			<br>
			The Urchins will always die in two attacks (unless they dodge), and will only do 6-10 damage each per turn.  They can also build up power, so keep in mind their next attack (or breath) will deal double damage if they do that, but what that ability really means is that there's a chance they'll die after building up and you won't take any damage at all.<br>
			<br>
			After the Urchins are down, unless you killed a Metal Slime earlier, try casting Expel on the Bats.  It's got a decent chance to hit at least one of them.  The bats will usually take two physical hits to kill if you didn't kill a Metal Slime, or one if you did.<br>
			<br>
			This fight gives a ton of EXP to help the Hero catch up in levels.  You should learn Return at level 7, but probably won't have the MP to cast it right away.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Obtain the Symbol of Faith.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			It doesn't matter who's holding this, but at some point you need to get it out of the hero's inventory.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Walk out of the shrine, and Wing to Branca.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Wait until Konenbur to use the inn, in case you take damage on the way there.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Take one step, use fairy water, and walk to Hector's Inn.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			The area around Branca has an <a href="#" data-toggle="tooltip" title="25% of the normal encounter rate, which translates to a 2/256 chance of getting into a fight in the grass.">extremely low encounter rate</a>, so you're unlikely to get into a fight in one step, and taking this step will allow you to reach Konenbur without Fairy Water wearing off.  Note that you cannot repel the enemies outside of the inn yet, but you do repel the enemies outside of Branca, so it's still worth using it now.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Recruit Hector and Re-Order to H/Hr/N/M.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Hector has the most HP of the party, so he goes in the lead until we get rid of him.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Win a fight on the way to Konenbur.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Once you win a battle with Hector in your team, your Fairy Water will recognize your party's highest character level as 202, allowing you to repel all overworld enemies.  This happens because Hector's stats are pulled from the monster data table, and he is the 202nd "monster" in the table.  The game recognizes this index as his level, and uses it to determine how fairy water should work, <a href="#" data-toggle="tooltip" title="I'm told the casino uses the remainder of your party level divided by 128, but I haven't tested this myself and I'm not sure it would matter; Hector would count as level 74.">as well as which enemy groups should appear in the casino monster arena</a>.</a><br>
			<br>
			After recruiting Hector, walk straight east.  This will keep you in the inn's encounter zone.  The desert zone is full of Rogue Knights and other tough enemies, so you don't want to fight down there if you can help it.  You need to turn south by the time you become adjacent to the mountain ridge north of you.  If you take extra steps to force a fight in the northern zone, your fairy water will wear off before Konenbur.  If you don't get into a fight, I recommend continuing south into the desert anyway, and hoping for an easy fight or a Metal Slime.  If a Metal Slime flees from you, the Fairy Water trick will still be activated.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Use the Konenbur Inn, give Mara your herbs, and make a safety save.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			If you only had one Fairy Water, you'll need to buy another.  If Taloon doesn't have any, make sure you have two.  You can also buy some more herbs here for safety, if you want.  Mara should have at least two.<br>
			<br>
			Shopping at Mintos saves one step of movement versus shopping at Konenbur on the way to the inn, and more importantly you're also able to utilize Taloon's inventory, but if you need Fairy Water or herbs don't hesitate to shop in Konenbur instead or as well.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Use a Fairy Water and walk to the Lighthouse.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			If you ever die or reset the console, your Fairy Water will wear off, so make sure to use it after you save.  Fairy Water will NOT expire while in a town or dungeon, only on overworld tiles that can give you encounters.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Climb the Lighthouse and grab the Fire of Serenity along the way.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Say Yes to Taloon, then say No.<br>
			<br>
			You're going to want to run from everything in here, unless you take a chance on a Metal Slime.  If you die to the boss, you lose any EXP you gained along the way, so it's not worth fighting other enemies, even the Rogue Wispers who generally won't hurt you.  If you lose anyone during the climb, you'll want to reset the console, unless you've killed a Metal Slime.  You have enough gold to revive after one wipe, and the EXP from a single Metal Slime can really improve your chances of surviving the boss by giving everyone more HP, and Nara more MP.<br>
			<br>
			Metal Slimes show up everywhere in the tower.  On the bottom two floors they're very common, but rarely show up alone.  Your teammates will not attack the Metal Slimes until the other enemies are dead, so keep that in mind when deciding if you want to fight on the botton two floors.  Furthermore, unless you go to Use No MP, Nara and Mara will cast spells on the Metal Slimes.  On the next two floors the slimes are rarer, but always show up solo, similar to the Endor grind.  Switch to Use No MP and fight them whenever you see them solo.  The boss floor has no random encounters.<br>
			<br>
			Make sure you grab the Fire of Serenity on the fourth floor; it's the chest in the center of the open room.  There's a Golden Barette on the top floor of the lighthouse, but it's not very useful.  It gives 4 defense power over the Feather Hats and 6 over the Wooden Hat, but it's not worth picking up unless you've sold a Feather Hat or need the 405 gold for whatever reason.<br>
			<br>
			Before you begin the boss fight, heal up and make sure Mara has all of your herbs.  Ideally, Hero and Nara each have at least 15 MP, and Mara has two or more herbs.  You probably won't live long enough to use more than that...
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Defeat the Lighthouse Bengal.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover lighthouse-bg">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>MP</th>
						<th>Atk</th>
						<th>Def</th>
						<th>Agi</th>
						<th style="width:120px">Attacks</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Lighthouse Bengal</td>
						<td>70</td>
						<td>9</td>
						<td>60</td>
						<td>83</td>
						<td>15</td>
						<td>Heal* (2/6),<br>Attack (2/6),<br>Roar (2/6)</td>
						<td>Can heal itself or the Flamers, unsure of parameters.  Can also roar to attempt to stun the whole team, causing them to lose a turn.  Weak resistance to Sleep.</td>
					</tr>
					<tr>
						<td>Flamer (x2)</td>
						<td>75</td>
						<td>8</td>
						<td>70</td>
						<td>75</td>
						<td>36</td>
						<td>Attack (2/6), Firebal (2/6), Fire Breath (2/6)</td>
						<td>Strong resistance to Expel, Weak resistance to Sleep</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			This battle is one of the last RNG walls of the run, but it can cost a lot of time.  If you killed a Metal Slime earlier, your chances go way up, but otherwise you want to pray the two Flamers don't spam Firebal.<br>
			<br>
			The Lighthouse Bengal actually isn't who you're worried about here.  Sometimes he'll try to stun your team, but as long as Hero and Nara aren't hit by it, he's just wasting his own turn.  He does have the possibility to cast Heal up to three times, but this isn't really an issue either because you'll be Expelling the Flamers and Nara will put him to sleep.<br>
			<br>
			The Flamers are the big problems here, and their stats speak for themselves.  They have more attack power than the Bengal, they're faster, and they can cast Firebal twice.  This fight can get real nasty if both Flamers open with Firebal.  To win this fight, you need to cast Expel on at least one of the Flamers and get the other two targets to sleep (or, ideally, Expelled).<br>
			<br>
			Set your Tactic to Offensive for this battle.<br>
			On turn one, Expel Flamer B.  This has about a 42% chance to work.  Nara  will cast Sleep on Flamer A, which has about an 83% chance to work.  Mara will use an herb or cast Blaze/Firebal.  Hector will do Hector.<br>
			Continue Expelling Flamer B until it works, you wipe, or Nara puts Flamer B to sleep (switch to Flamer A).  Try to Expel both Flamers unless Hero runs out of MP, or the fight feels safe enough that you can win it with damage -- i.e. One Flamer is gone, the other is asleep and at half HP, and the Bengal is asleep or dead and unable to cast Heal.  Nara will unfortunately start casting Heal if you get slammed with Firebals, so hopefully Mara picks everyone up with herbs so that Nara is free to keep casting Sleep.  You can try to help healing if both Flamers are disabled, but you probably won't have the MP to do so.  
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Use the Fire of Serenity in front of the Lighthouse Beacon.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			If you forgot it, you can walk back down and get it, but you'll get into a couple of encounters along the way.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Return to Konenbur and talk to Taloon to get the ship.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Use the inn here if you want; it's slightly fewer steps than Soretta, especially if you aren't going to safety save there.  Remember, you won't get any overworld encounters anymore unless you run out of Fairy Water.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Sail to Mintos.  Re-stock Fairy Water if necessary.  Use a Fairy Water in the town.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			We won't do any intentional deathwarps until Esturk, so you can sell all of Taloon's stuff if you want to make room for Fairy Water.  You need at least eight Fairy Waters before the Hero learns Repel.  Two of these eight Fairy Waters will be used after Taloon, Nara, and Mara are killed off in the Magic Key segment, so leave two waters on Hero.  If you picked up Fairy Water in Chapter Two, that works, too.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
			You can technically pick up just Brey from Mintos right now if you go talk to him, but this is really only useful if Mara is unable to cast Outside, such as if she died in the Lighthouse boss fight.  Even if he's carrying your Fairy Water from Chapter Two, you can just buy two Fairy Waters and pick up the whole team after Soretta.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Walk east to the traveler's gate shrine and snag the small medal in the back.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			If the shrine is Y-shaped, it's around the back in the bend.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Walk to Soretta.  Inn/Revive as needed, safety save if you want, and use a Fairy Water.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			The Padequia Cave has a low chance of killing you, but a safety save really only takes a few seconds, so it's worth it.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Walk to the Padequia Cave and grab the Padequia Seed.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			This cave is pretty straightforward if you know where to go.  Conjurers and Infurnus Knights are the most dangerous enemies in here, but Iceloths can do decent damage, too.  Hopefully Mara stays alive, because she needs to cast Outside at the end of the dungeon, but if she does die you can just <a href="#" data-toggle="tooltip" title="If you sold all of Taloon's stuff at Mintos, maybe don't deathwarp.">deathwarp to get out</a>, but this may leave you hurting for gold later, especially if you died in the Lighthouse and revived instead of resetting.  You'll also need to use an extra Fairy Water after respawning.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Cast Outside and Return to Soretta.  Use the inn, and talk to the king in the field.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="commentary">
			From here until you get the Final Key, the time of day starts to matter, so be careful not to use the inn in strange places.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
			If you did the grislysaber grind in Chapter Two and put a bunch of Fairy Water on Brey and/or Cristo, you can go to Mintos right now and pick up the Chapter Two Crew.  Otherwise, we'll do that later to save lag frames when we look at the spell/item menus.  If you do this, make sure to grab the small medal next to the well.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Return to Endor and sail SW to the island house and collect the small medal.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Land your ship on the south side of the island, directly below the entrance.  The small medal is in the far jar in the NE corner of the house.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Use Fairy Water and sail south to Haville.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			It doesn't really matter where you land your ship for this one.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Sail west to Aktemto.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Land your ship inside the inlet east of the town.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Head north toward Seaside Village and use Fairy Water right before you get off the ship.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			This Fairy Water usage has no extra steps, so if you've messed up your movement at all you'll have to use it early to avoid the message that your Fairy Water wore off.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Enter Seaside Village and grab the Small Medal in front of the dog statue.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			You can only collect this medal during the day, but if it's night time you can just use the inn.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Sail north to Santeem and enter the castle.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Entering Serene does not give you the Return point for Santeem, so make sure you enter the castle.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Sail around the coast to the north.  At the last of three forest tiles, use Fairy Water and sail north to Stancia.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			This is the hardest Fairy Water usage to describe through text, but north of Santeem where the forest borders the sea, there are three forest tiles in a horizontal row that touch the water.  Use Fairy Water on the rightmost one and head north to Stancia.  Technically it's six fewer steps to reach Stancia through the canal that runs north of the forested island, but generally you need to waste 2-6 steps anyway so that it's day time when you enter Stancia.  Plus, if you take the shorter route, you'll have to use this Fairy Water while you aren't adjacent to land, though there is a seven-tile window on this one.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Collect small medal in NE house, talk to orange guy in castle, collect small medal in castle.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			First small medal is in the far jar.  Orange guy is on F2 from the main entrance, and triggers Panon to spawn in Monbaraba.  Second medal is in the second drawer in the back-right room on F1.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Return to Haville, walk to Monbaraba.  Use Fairy Water in hills south of Kievs.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			If you don't stray any further west than you need to, you need to use this Fairy Water within six steps of entering the hills south of Kievs.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">In Monbaraba, go backstage and talk to Panon.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			It will need to be day time to recruit him, so stay at the inn if your day/night cycle is screwed up.  If he doesn't appear, you didn't talk to the orange guy in Stancia.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Return to Mintos, grab the Small Medal and the Chapter Two Crew.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			The Small Medal is to the left of the well.  Approach Cristo in the inn and use the Padequia Root to cure him and recruit their party.  Run east down the hall to the roof so that you can cast Return.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Return to Aktemto and sail south to grab the Small Medal and Magic Key.  Let non-essential Chosen Ones die in the cave.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Note: Hector will leave the party the moment you leave Mintos.<br>
			<br>
			Run through the cave you found Orin in and search the Lamp of Darkness chest.  Down the stairs, there's a Small Medal in the jar on the left, and the Magic Key in the chest.<br>
			<br>
			Start out by re-ordering to Taloon/Panon.  When the first character dies, replace them with Nara followed by Mara.  As the back character dies, or after Mara dies, swap in Alena, Hero, Cristo.  Don't let Brey out of the wagon until you have no choice, as he needs to cast Outside at the end.<br>
			<br>
			Ideally, Taloon, Nara, and Mara all die, and everyone else lives.  If anyone important dies, revive them before Keeleon.  If anyone unimportant live, kill them off before the Keeleon fight, so that they don't get EXP from him.  A good way to do this is to put the Hero in the party, stop using Fairy Water, and have Hero kill them off when you get into a fight.  If everyone somehow survives, consider using the random encounters in the Zenithian Armor cave.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Return to Mintos, and sail south to Riverton.  Use Fairy Water before turning west.  Grab the Small Medal.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Sail straight south from Riverton, and you'll smack into a bunch of mountains.  Riverton is a bit to the west, but you'll need to use your next Fairy Water before passing the westmost mountain that lines up horizontally with the one you bumped into.  It should become night right before you enter Riverton.  The Small Medal is on the island with the bard, as far south and you can stand.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Return to Endor.  Enter the castle at night and grab the Pink Leotard and Small Medal.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			If it's not night time, use the Lamp of Darkness.  Check the chest on the left and the drawer on the right in the king's walk-in closet.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Return to Stancia.  Sail west to the Medal King.  Use Fairy Water on the tip of the peninsula.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			The Fairy Water should be used when you pass the tip of the peninsula from the south.  You can use it up to three steps earlier or six steps later, but this is a good guideline.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Turn in your Small Medals.  You should have 9.  Get a Sword of Miracle for Cristo, and Staves of Punishment for Hero, Hero again, and Alena.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			You'll sell one of Hero's staves later, but Hero and Alena can both use these staves against Keeleon to increase your damage output.  If you're missing a medal, you can either try to remember where it was and go grab it, or buy less armor later.<br>
			<br>
			Small Medal Locations:<br>
			1) Shrine between Mintos and Soretta<br>
			2) Island House between Endor and Haville<br>
			3) Seaside Village<br>
			4) Stancia House<br>
			5) Stancia Castle<br>
			6) Mintos Well<br>
			7) Magic Key Cave<br>
			8) Riverton Island<br>
			9) Endor Castle
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Return to Konenbur and sail east to Rosaville.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Follow the coast and take the second river you pass.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Wait at the east counter for the old man to circle around to you to access the weapon shop.<br>
		Sell: Hero Broad Sword, Hero Staff of Punishment, Nara Morning Star, Taloon Iron Apron, Pink Leotard<br>
		Buy: Hero Sword of Lethargy<br>
		Circle around to the south counter to access the armor shop.<br>
		Buy: Cristo Sacred Robe</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			You're selling just about everything you don't need.  The money you get from this should cover everything you're buying.<br>
			<br>
			The Sword of Lethargy is a large part of what makes this route work.  If you attack an enemy with it, it'll have a 1/3 chance to put the enemy to sleep, including bosses who are immune to the Sleep spell.  When you use it in battle, it will cast Sleepmore, but this effect goes through the usual Sleep resistance, so it's not any more useful than casting the actual spell.  The Sacred Robe gives Cristo a 1/3 resistance to spell damage, which is good to have for most of the remaining bosses in this chapter.<br>
			<br>
			If you have extra gold (extra small medal, extra iron aprons) you can buy a Dragon Mail for Hero for a good defense boost and 1/3 resistance to breath attacks, but if you're getting the Zenithian Armor before the Metal Babble grind, it may not be worth the investment.  If Taloon has an Iron Shield, you can either sell it or give it to Cristo.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Equip new items, stay at inn, revive if needed, and safety save.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Equip Hero with Sword of Lethargy and Dragon Mail.  Equip Cristo with Sword of Miracles and Sacred Robe.<br>
			<br>
			If you do need to use the inn, it's probably a little faster to return to Soretta to inn/save so that you don't have to wait on the old man to go into Priest Mode at Rosaville.
			</div>
		</div>
	</div>
	</div>
	
	
	<div class="row">
		<div class="col-sm-12">
			<h3>Chapter Five Part Two: Gathering the Zenithian Equipment</h3>
		</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Return to Keeleon Castle, and change party to Panon/Hero/Alena/Cristo.  Defeat Keeleon.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover keeleon-bg">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>MP</th>
						<th>Atk</th>
						<th>Def</th>
						<th>Agi</th>
						<th style="width:120px">Attacks</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Keeleon</td>
						<td>400</td>
						<td><a href="#" data-toggle="tooltip" title="Monsters with 255 MP do not expend MP when they cast spells, effectively granting this enemy unlimited MP.">255</a></td>
						<td>140</td>
						<td>80</td>
						<td>35</td>
						<td>Attack (2/6),<br>Firebal (2/6),<br>Freezing Wind (2/6)</td>
						<td>Regenerates 16-23 HP per turn.</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			This fight, and most Chapter Five boss fights, are pretty simple after you've set up.  You're only controlling one character during the battle, and our pre-battle prep and selected tactic will determine what the other three characters do.<br>
			<br>
			The Hero is essentially just going to attack Keeleon to keep him asleep, but if you're feeling bold you can use the Staff of Punishment for 25-55 damage when he's asleep to increase your damage output.  However, Keeleon is much faster than your team, so if you attack on a turn he wakes up, there's a good chance you'll put him right back to sleep.  Hero can also serve as the healer, if you've got Keeleon asleep and want to heal one or two people, but since Keeleon is regenerating, you don't want to spend too many turns healing.<br>
			<br>
			Panon will unfortunately ignore your party tactics, so it's hard to say what he'll do.  Hopefully he'll just attack, as he also has a Sword of Lethargy and can help the Hero put him to sleep, but he can also waste turns casting Sleep or using RobDance.  Panon has high HP and a Cloak of Evasion to help him dodge physical attacks, so that's why he's in the lead.<br>
			<br>
			Alena will attack at the start of the fight, but after Keeleon takes a little damage she'll switch to using the Staff of Punishment, which will do more damage.  If she falls to low HP, she may start defending every turn, so you'll need to heal her as soon as Keeleon goes to sleep.  If you left herbs on her after chapter two, she may use them when someone gets low, which can be annoying if she would otherwise be using the Staff.<br>
			<br>
			Cristo needs to stay on Use No MP because he doesn't have any useful spells.  He can cast Heal or Upper, but he's got the highest damage output on the team with that Sword of Miracles, so neither spell is worth him stopping.  Cristo has the lowest HP of the group by far, but his Sacred Robe will cut Firebal's damage, and his Sword of Miracles will heal him.<br>
			<br>
			Keeleon will probably kill you if he doesn't go to sleep in the first 3-4 rounds, but if he does, just reset the console and walk back.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Return to Soretta.  Change party to Panon/Hero/Ragnar/Alena, give Ragnar Full Plate Armor/Sword of Miracles, heal up and save.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Ragnar has more attack power and is a little more durable than Cristo, so give him the Sword of Miracles instead.  This will make the upcoming Balzack fight a little more consistent, and potentially speed up a few of the chapter's remaining boss fights.  Cristo can equip the Staff of Punishment, but he won't fight anything until you after you pick up the Magma Staff.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Return to Santeem and defeat Balzack.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover balzack5-bg">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>MP</th>
						<th>Atk</th>
						<th>Def</th>
						<th>Agi</th>
						<th style="width:120px">Attacks</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Balzack</td>
						<td>500</td>
						<td><a href="#" data-toggle="tooltip" title="Monsters with 255 MP do not expend MP when they cast spells, effectively granting this enemy unlimited MP.">255</a></td>
						<td>150</td>
						<td>100</td>
						<td>14</td>
						<td>Attack (2/6),<br>Snowstorm (2/6),<br>Freezing Wind (2/6)</td>
						<td>Regenerates 44-55 HP per turn.</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			This fight is basically the same as the Keeleon fight, with the key difference that you're much faster than Balzack.  This means the Hero is free to heal or use the Staff of Punishment when Balzack is asleep, though at this point the Staff's average damage isn't really better than the Hero's attacks.  Balzack also regenerates more HP than Keeleon, so you should be careful not to lag behind on damage.  If anyone dies early on in the fight, just reset the console.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Grab the Magma Staff, equip on Cristo, and Return to Soretta.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="commentary">
			You're basically equipping the Magma Staff because of the Esturk Fight.  Cristo will be pretty busy casting spells or using the Staff of Punishment against Bakor, and will occasionally wave the Magma Staff at Metal Babbles.  However, Cristo wasting turns against Babbles really doesn't hurt your chances of killing them, and he'll learn not to do that before you get too far into the grind.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Repel and sail to Gardenbur.  Re-Order party to Alena, Taloon, Ragnar, Panon.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			You want someone dead in slot 2 because they're the one getting arrested.  Alena goes in the lead so that she gets the Fire Claw.  Ragnar is here so you can sell the Sword of Malice without the "I'll get the sword from Ragnar in the wagon" text.  Panon is here to keep Fairy Water working.<br>
			<br>
			If you forget to do this re-order, don't worry about it.  You can freely change the prisoner by talking to the guard.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="commentary">
			Make sure you don't enter Gardenbur with your second slot as your only living character.  You can actually end up with a "glitched" team of all corpses if you do this, and if you try to re-order in town after doing that, you can softlock the game.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="aggro-strat">
			You can cut Alena's Cloak of Evasion if you want, but it doesn't save much time.  It costs about thirty seconds to buy and equip, mitigated by any extra time you spend healing her without it.  If she isn't in the party for the longer walking segments, you probably still come out ahead.<br>
			<br>
			If you want to do this, the party order here should be Alena, Taloon, Panon, Hero, so that you can menu to Hero's Return spell faster.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Grab Small Medal and Fire Claw, and use inn.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			You can skip this small medal if you're cutting the Hat of Happiness, but it makes the last hour of the game a little sketchier.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Sell the Sword of Malice (Ragnar) for a Cloak of Evasion (Alena).</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			If you dragged Taloon in with you and he has safety items you want to sell, sell those, too, because later in Rosaville you'll lose frames being told that the shopkeeper will grab the item(s) from the wagon.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="todo">
			TODO: Cloak of Evasion cut?  Is it worth the 3k gold?  Will skipping it stop Alena from having more defense power than Ragnar?
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Trigger theft event, equip Alena, heal/safety save in Soretta.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Before entering Soretta to save, equip Alena's new claw and cloak.<br>
			<br>
			You definitely want to save here, because the upcoming cave is risky.  I recommend saving and reviving in Soretta instead of Gardenbur, because in Gardenbur you have to walk all the way out of the castle from the church each reset.  The more times you die, the more time you lose to walking outside.<br>
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Re-order to Hero/Ragnar/Alena/Cristo.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Re-order AFTER saving, or Fairy Water/Repel won't work if you reload the save.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Navigate the cave southeast of Gardenbur and defeat Bakor.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			There's a lot of treasure in here, but none of it is worth collecting.  Consider grabbing the Iron Mask and Dragon Shield on the bottom floor if you need money for some reason, but you should be set.  If Hero gets deleted by Bakor, walk toward these chests while you wait for an encounter to show up and help you deathwarp.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover bakor-bg">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>MP</th>
						<th>Atk</th>
						<th>Def</th>
						<th>Agi</th>
						<th style="width:120px">Attacks</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Bakor</td>
						<td>1000</td>
						<td><a href="#" data-toggle="tooltip" title="Monsters with 255 MP do not expend MP when they cast spells, effectively granting this enemy unlimited MP.">255</a></td>
						<td>138</td>
						<td>100</td>
						<td>79</td>
						<td>Snowstorm, Attack, Increase,<br>Snowstorm, Build Up, Attack</td>
						<td>No regeneration.  Cycles through each attack one at a time in a strict rotation.  If hit with Stopspell, he will skip the spells in his rotation.</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			This fight is pretty safe, but it can go wrong if you aren't careful, or if Stopspell fails on him more than once.<br>
			<br>
			Start out the battle on Offensive, until Stopspell lands.  He has a small resistance to it, so it has an 83% chance to hit each turn.  If it fails twice, which has about a 3% chance to happen, he'll cast Increase, which will slow down the fight considerably.  If it fails three times, he'll cast Snowstorm a second time, and you'll probably wipe.<br>
			<br>
			After Stopspell lands, switch to Defensive, and Cristo will start stacking Increase.  After three casts, you can either stay on Defensive to let Cristo heal and cast more Increases, or switch to Use No MP and Cristo will go on the offensive.  Bakor will still deal decent damage when he builds up power, so make sure to not let your health drop too much.<br>
			<br>
			The agility seed he drops doesn't matter too much, but I recommend giving it to Hero to help with outrunning things in the metal babble grind, specifically Dragonits.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Collect the Final Key and Zenithian Shield.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Cast Outside immediately, cast Return to get back to the castle, and then talk to the queen.  The shield is in the basement in the NE corner of the castle.  You don't have to free the dead prisoner; he'll find his own way out.<br>
			<br>
			As mentioned previously, if the Hero dies to Bakor, you'll want to deathwarp.  Walk toward the Iron Mask or Dragon Shield chests, but just deathwarp on the first encounter you find.  You have plenty of extra gold.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Return to Rosaville for more shopping.<br>
			Sell: R Full Plate, A Fire Claw, A Iron Claw, A Staff of Punishment, C Staff of Punishment.<br>
			Buy: A Stiletto Earrings, Armor.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Return to Rosaville, and perform the following transactions:
			<div class="table-container">
			<table class="table table-responsive table-hover">
				<tr>
					<th>Action</th>
					<th>Item</th>
					<th>Character</th>
					<th>GP</th>
				</tr>
				<tr>
					<td>Sell</td>
					<td>Full Plate</td>
					<td>Ragnar</td>
					<td>1725</td>
				</tr>
				<tr>
					<td>Sell</td>
					<td>Fire Claw</td>
					<td>Alena</td>
					<td>7500</td>
				</tr>
				<tr>
					<td>Sell</td>
					<td>Iron Claw</td>
					<td>Alena</td>
					<td>1125</td>
				</tr>
				<tr>
					<td>Sell</td>
					<td>Staff of Punishment</td>
					<td>Alena</td>
					<td>3225</td>
				</tr>
				<tr>
					<td>Sell</td>
					<td>Staff of Punishment</td>
					<td>Cristo</td>
					<td>3225</td>
				</tr>
				<tr>
					<td>Buy</td>
					<td>Stiletto Earrings</td>
					<td>Alena</td>
					<td>7500</td>
				</tr>
				<tr>
					<td>Buy</td>
					<td>Dragon Mail</td>
					<td>Ragnar</td>
					<td>5200</td>
				</tr>
			</table>
			</div>
			If you have at least 4300 gold left, sell the Hero's Half Plate for a Dragon Mail, to reduce damage from Dragonits' fire breath.  Otherwise, buy Ragnar an Iron Mask or Iron Helmet.  You should be able to afford the Dragon Mail if you brought one extra Iron Apron out of Chapter Three, unless you deathwarped after Bakor.<br>
			<br>
			Equip all of your new stuff, including the Zenithian Shield (Hero, Ragnar, Alena).  You can either sell Hero's Iron Shield or pass it to Ragnar or Cristo, but the defense power doesn't do much at this point, especially if it's just replacing Ragnar's Scale Shield.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="todo">
			TODO: Revisit this shopping segment yet again.  The big thing I want to figure out is what equipment setup for Ragnar and Alena makes Cristo most likely to cast Increase twice without throwing any items away.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Head through Colossus to Dire Palace, and grab Demon Hammer and Aeolus Shield.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
			This is risky, but you can grab the Zenithian Armor now if you want.  If you want the Zenithian Armor <i>and</i> Hat of Happiness, you'll need to grab two small medals out of Haville before going for the armor.  The only real payoff of this is that Hero will take reduced damage from Bebanbars' Firebane in the Metal Babble grind.  The Hat of Happiness sounds useful for the Metal Babble grind, but realistically while you're walking between partitions you find so many encounters per step that once you get there, you'll only be gaining maybe 1 MP per battle.<br>
			<br>
			If you really want to yolo this, you can hand in Panon for the Zenithian Helmet and commit to not dying or fighting anything between here and Lucia.  If you save and reset after giving up Panon, you'll get about three overworld/sea encounters on the way to the Zenithian Armor cave, one on the way to the Royal Crypt, and three more between the Colossus and Dire Palace, which can be very dangerous.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Cast Repel before entering this dungeon.<br>
			<br>
			The big problem you're facing in the Colossus is Blizags, which have a tendency to cast Beat and Defeat.  They're not likely to successfully cast and land the spells, but they appear on every floor so over the course of the dungeon it becomes pretty likely you'll lose a couple people.  You will also rarely encounter Snowjives, which cast Blizzard, the tier-three ice elemental group spell.  Both monsters are highly resistant or immune to Beat/Defeat, Expel, and Stopspell, so there's not a whole lot you can do but run.  If they're solo you can fight them, but then you'll lose the repel bug when you exit the dungeon.<br>
			<br>
			The Demon Hammer is in the Colossus on the left hand (your right, stage left), barely out of your way.  If you die after collecting it, it's recommended to just go grind babbles and come back later.  However, the Aeolus Shield does help in the grind, so you want to try for it if you have 3+ party members alive when you reach the Hammer.<br>
			<br>
			Once you jump out of the colossus, you can regain your wagon by re-entering and exiting the dungeon, but if the Hero's alive to cast Return, there's no reason to do this.  If the Hero is dead, grab the wagon so that Brey can cast Return, and hopefully you cast Repel before entering the tower (or at least before the Hero died).<br>
			<br>
			Inside the Dire Palace, go all the way to the back and grab the Small Medal and Aeolus Shield from the hidden basement.  Make sure the Hero has the Shield (don't equip it).  Then, Return to Endor and head into the Crypt.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Kill 8-10 babbles in Royal Crypt and get the Staff of Transform.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Equip the Hero with the Demon Hammer, and equip Ragnar with the Sword of Lethargy.  Take the Magma Staff off of Cristo and throw it into the wagon; he doesn't need a weapon right now.  He'll learn Beat soon, and the Sword of Miracles does the same damage to Metal Babbles as his fists do.<br>
			<br>
			Upon entering the Crypt, head straight down to the bottom floor.  If you kill a Metal Babble on the top floor, that's awesome, because it gives Brey the EXP he needs to learn Bikill, but don't grind for it.  Along the way, grab the Small Medal chest.<br>
			<br>
			When you get to the bottom floor, walk all the way around and get to the staircase leading up.  Walk in and out of this room to look for Metal Babbles.  If you run out of resources, head upstairs and use the healing tile to restore your HP and MP.  It will not revive, so keep everyone alive until Cristo learns Vivify.  Keep your health maxed out until you've killed 2-3, after which point you can loosen up a bit, but try to keep everyone above 100 HP (Cristo can be a little lower).<br>
			<br>
			You're going to run from most of the enemies in here, but if you get large groups of certain enemies, Expel or the Aeolus Shield are better options.  The only enemy you should Expel is the Dragonit, who is 100% vulnerable to it.  The shield and Defeat work great (83% chance) on Bebanbars, Hambalbas, and Tyranobats.  Most enemies in here are worth 1.5-2% of a Metal Babble, so don't fight anything for the EXP.  If you want safety EXP, just grind another Babble.<br>
			<br>
			On that note, depending on how safe you want to be, you can kill anywhere between eight and ten Metal Babbles.  Eight will get Zap for the Hero, nine will get HealAll for Cristo, and ten will get HealAll for Hero.  HealAll is nice for the walk down to Esturk, because you'll save time over casting 2-3 Healmores to get Alena and Ragnar to full, but doesn't really help with safety or stability.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="todo">
			TODO: Unequipping the Magma Staff here is contradictory to what was said up when we picked up the staff.  Should he just not equip it earlier?
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Get the Zenithian Helmet, Zenithian Armor, and a Hat of Happiness.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			You can optionally get these items before the Colossus, but I recommend geting them now.  Re-order to Panon, Hero and Ragnar before entering Stancia to get the helmet.  Run straight through the cave to grab the armor and small medal at the end.  If you only have two small medals for some reason, grab the extra one in the first long hallway.  When you're done in here, cast Outside and trade in the medals.<br>
			<br>
			Note that once Panon is gone, if you win a battle or reset the console, you'll be susceptible to overworld encounters until you reach Lucia.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="commentary">
			You lose your wagon temporarily when you get off the boat inside the dungeon, and casting Outside doesn't bring it back.  If you have any medals in the wagon, re-enter the ship to get the wagon back before entering the Medal Shrine.
			</div>
		</div>
	</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12">
			<h3>Chapter Five Part Three:  Final Dungeons and Boss Gauntlet</h3>
		</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Trigger the Dire Palace Event and Prepare for Esturk.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Return to the Dire Palace.  Head toward the meeting room and use the Staff of Transform until you turn into anything non-human.  Sit in the closest chair until Saro shows up.  After the cutscene, jump out out the window to the right of the meeting room and cast Return to Soretta to regroup and safety save.<br>
			<br>
			At Soretta, use the inn and uncurse the Hero.  Then, move the Sword of Lethargy back onto the Hero and equip it.  Give Cristo the Magma Staff if he doesn't have it, and equip it.  Ragnar re-equips the Sword of Miracles.<br>
			<br>
			Note that the Hero's Zap spell deals more damage than attacking for very little MP, but the Sword of Lethargy will still be used to put bosses to sleep.  This equipment setup also gives negligibly more <a href="#" data-toggle="tooltip" title="Sword of Lethargy is 60 attack power and Magma Staff is 63.">combined attack power</a> to Ragnar/Cristo without the risk of Ragnar wasting turns waving the Sword of Lethargy.  The healing is also good on Ragnar against bosses that don't primarily use area attacks, and with the attack power shifted off of Cristo, it's not as bad for him to stop attacking to heal.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Enter Aktemto Mine and Defeat Esturk.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			The walk down to Esturk is pretty straightforward, since you're no longer underleveled.  You'll always run first try from the Chapter Four enemies on the first two floors, but you shouldn't fight anything in this dungeon anyway.<br>
			<br>
			Have Cristo heal whenever you need it, and if you run low on MP, there's a heal tile in Esturk's toolshed.  You don't need much MP for the boss, so don't fuss too much over MP; if Cristo and Hero both have 30 MP you should be good.<br>
			<br>
			If someone gets poisoned, do not cast Antidote.  The poison animation <a href="#" data-toggle="tooltip" title="The poison animation costs four frames per four steps, and there are about 280 steps from the third floor of the mine until the deathwarp.  You'll lose up to 50 HP on the way to Esturk.">does cost time</a>, but not enough to offset <a href="#" data-toggle="tooltip" title="Casting Antidote costs about 300 frames, and the HP you lose from it mostly gets absorbed by your regular healing, especially if you have HealAll.">the time it takes to cast Antidote</a>, especially if you get poisoned again later.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover esturk-bg">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>MP</th>
						<th>Atk</th>
						<th>Def</th>
						<th>Agi</th>
						<th style="width:120px">Attacks</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Esturk</td>
						<td>900</td>
						<td><a href="#" data-toggle="tooltip" title="Monsters with 255 MP do not expend MP when they cast spells, effectively granting this enemy unlimited MP.">255</a></td>
						<td>220</td>
						<td>100</td>
						<td>55</td>
						<td width=200>Blizzard Breath, Attack, Deep Breath,<br>Attack, Freezing Waves, Attack<br>Eerie Light*</td>
						<td>Two actions and 50 regeneration per turn.  Cycles through first six attacks one at a time in a strict rotation.  Eerie Light attack is only used while Esturk is asleep.</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			The general strat here will be to harass him with Zap while he's asleep, and switch to attacking when he wakes up.  The Eerie Light attack he uses while asleep is pretty nasty, but you want him to lose turns waking up.  For tactics, stay on Use No MP unless someone needs to be healed, and then swap to Defensive.  Cristo's attacks with the Magma Staff aren't that contributional, but if nobody needs to be healed he'll cast Defeat.  If Hero is under 150 HP when Esturk builds up power, you should parry and go to Defensive.<br>
			<br>
			As long as he doesn't stay asleep too long, you should only be at risk of losing characters to his deep breath combos.  If you put him to sleep after he takes a deep breath, watch out, because the deep breath will <a href="#" data-toggle="tooltip" title="It can double his Blizzard Breath, too, but that requires him to fall asleep and wake up three turns in a row.">double the damage from Eerie Light</a> if he doesn't immediately wake up.  If Cristo's doing a good job healing, you can just forego the Sword of Lethargy and Zap him to avoid that risk.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="todo">
				TODO: Research Aeolus Shield effectivity in this dungeon.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Obtain the Gas Canister and Balloon.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			After Esturk is defeated, run downstairs and grab the Gas Canister.  Since you can't cast Outside without walking all the way to the mine section, deathwarp to get out of here.  A good way to go about this is to not heal anyone other than the Hero on the way to the Gas Canister, being careful that you don't fully wipe.  If your whole party is still alive, open the mimic chest south of the Gas Canister (the chest on the right) and run away from it repeatedly, hoping it kills Ragnar and Alena with Defeat.  If it kills Cristo and/or Hero, <a href="#" data-toggle="tooltip" title="If the Hero is still alive, cast Zap on Alena/Ragnar while they fight the Mimic.">kill it</a> and beat up random encounters until you die, as the Mimic relies on Robmagic to cast subsequent Defeats.  If you give up on the Mimic, make sure you do NOT attack your allies with the Hero's Sword of Lethargy, since sleeping characters take half damage.  Cast Zap instead.<br>
			<br>
			After the deathwarp, <a href="#" data-toggle="tooltip" title="If you killed enough Babbles to learn Vivify on the Hero, use that instead.">pay to revive</a> Ragnar only, Return to Riverton, and talk to the balloon guy.  Use the inn, talk to balloon guy again, and Return to Soretta.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Enter the World Tree and grab Lucia and the Zenithian Sword.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Re-order to Hero, Alena, Cristo and head up the tree.  Revive Alena and Cristo with Leaves of the World Tree as soon as possible.  There's a small chance Hero might get killed on the way, but it typically requries a triple run failure.<br>
			<br>
			The ground in this dungeon is literally made of revival, so you don't have to be as tight with healing as in other dungeons.  The Defeat and the Aeolus Shield works well on most enemies in here.  Alena will easily kill Snowjives and Red Cyclones in one turn.  You should never fight Chaos Hoppers.  Green Dragons are very common and breathe poison, so don't bother removing the poison until you leave the dungeon, unless the poison animation messes up your movement.<br>
			<br>
			A potential speed strat is to leave Alena dead for the whole dungeon so that you take less area damage, but she won't be around to clean up the enemies your instant-kill attacks miss.
			</div>
		</div>
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>Agi</th>
						<th>Defeat/Aeolus</th>
						<th>Expel</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Snowjive</td>
						<td>90</td>
						<td>35</td>
						<td>42%</td>
						<td>0%</td>
					</tr>
					<tr>
						<td>Green Dragon</td>
						<td>143</td>
						<td>55</td>
						<td>83%</td>
						<td>0%</td>
					</tr>
					<tr>
						<td>Red Cyclone</td>
						<td>80</td>
						<td>79</td>
						<td>83%</td>
						<td>0%</td>
					</tr>
					<tr>
						<td>Ogre</td>
						<td>210</td>
						<td>47</td>
						<td>42%</td>
						<td>0%</td>
					</tr>
					<tr>
						<td>King Healer</td>
						<td>150</td>
						<td>30</td>
						<td>0%</td>
						<td>0%</td>
					</tr>
					<tr>
						<td>Chaos Hopper</td>
						<td>90</td>
						<td>59</td>
						<td>42%</td>
						<td>83%</td>
					</tr>
					<tr>
						<td>Infernus Sentinel</td>
						<td>250</td>
						<td>61</td>
						<td>0%</td>
						<td>83%</td>
					</tr>
					<tr>
						<td>Eigerhorn</td>
						<td>250</td>
						<td>78</td>
						<td>42%</td>
						<td>42%</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="details">
			After recruiting Lucia, you want to get into one more fight before leaving the tree, and win it so that the repel glitch reactivates.  If you don't get it before the Zenithian Sword chest, you can either force a fight on top, jump out and force a fight, or just take the first fight you encounter outside Gottside.<br>
			<br>
			Regardless, cast Return and head to Konenbur.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Get the Baron's Horn.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Cast Repel, and fly west of Konenbur.  Land anywhere on Gottside island.  Walk to Gottside and enter the town, to pick up the Return point.  Continue on to the shrine and collect the Baron's Horn, and then cast Return to Gottside.  Then, walk to Zenithia Tower.  Remove Lucia from your party and equip the Zenithian Sword before entering.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Pass through Zenithia Tower, Zenithia, and the Final Cave.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Once inside the tower, re-equip the Sword of Lethargy.  Proceed through the dungeon to Zenithia Castle.  Vivify anyone who's dead before entering the castle, but don't use magic to top off your HP.  If you cut the Hat of Happiness, consider returning to Soretta to heal if you spent too much MP in the tower.<br>
			<br>
			Inside Zenithia, you can optionally talk to Master Dragon to get about half a level up worth of EXP for the Hero.  This also powers up the Zenithian Sword, doubling its attack power and activating its ability to remove buffs from enemies.  The attack boost is only useful if you want to be really aggressive against Necrosaro, and the ability is only useful if his third phase stacks Increase.  You should also grab a Dew of the World Tree from the minidemon who's growing World Trees.  Use it immediately to refill your health, and talk to him again to get another one.  Note that walking around Zenithia will also give Cristo a chance to regenerate MP if he has the Hat of Happiness.<br>
			<br>
			Jump into the hole to get to the Final Cave.  Re-order the party to just Hero and Ragnar, and proceed through the cave.  Once you get <a href="#" data-toggle="tooltip" title="A room or two before you reach the &quot;tower&quot; section.">closer to the end</a>, pull out your full party and take a couple battles to get Brey the EXP he needs.  If you did the Metal Slime grind in Chapter Two, you'll need up to 3.4k EXP, otherwise you'll need up to 6.1k.  These numbers assume all Demighouls and Anderougs in the boss gauntlet get bounced with the Aeolus Shield, not killed by Defeat.  If you did the Metal Slime grind, you can opt to kill the Anderougs instead of hitting them with the Aeolus Shield (or at least wait until three die before using the shield).<br>
			<br>
			You can optionally pick up the Water Flying Clothes for Brey, but he shouldn't need them.  Grab the Mirror Shield in the center of the tower section and equip it on Ragnar.  This will give you a slight damage boost against Radimvice, which is nice if you play the fight overly safely, and also gives you a chance of murdering Metal Kings and Babbles in the remainder of the dungeon.  Another option is to grab the Demon Mail (The chest you pass in the "arrow room") for Ragnar, which will provide resistance to almost all spells (not Infermost) on top of the Dragon Mail's breath resist.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Step into the Last Refuge and set up for the Bosses.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
			Once you get through the Final Cave, cast Repel and enter the Last Refuge to pick up the Return point.  Return to Konenbur to use the inn and pick up the Sword of Decimation.  <a href="#" data-toggle="tooltip" title="If you do safety save, make sure Lucia is in your party so that you can continue to use Repel in the underworld.">Safety save if you want</a>, but you shouldn't be worried about gold at this point, especially if the Hero hit level 28 and learned Vivify.<br>
			<br>
			It's recommended to fight the minibosses either clockwise from the Last Refuge (Gigademon -> Infurnus Shadow -> Radimvice -> Anderoug) or counter-clockwise starting with the Shadow (Infurnus Shadow -> Gigademon -> Anderoug -> Radimvice).  The former is fewer steps, but the latter gives you a second Sword of Miracles for the Gigademon fight.  This guide will encourage starting with the Infurnus Shadow.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Defeat the Infurnus Shadow.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover infernusshadow-bg">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>MP</th>
						<th>Atk</th>
						<th>Def</th>
						<th>Agi</th>
						<th style="width:120px">Attacks</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Infurnus Shadow</td>
						<td>950</td>
						<td><a href="#" data-toggle="tooltip" title="Monsters with 255 MP do not expend MP when they cast spells, effectively granting this enemy unlimited MP.">255</a></td>
						<td>190</td>
						<td>180</td>
						<td>72</td>
						<td width=200>Attack, Explodet, Roar,<br>Attack, Violent Blaze, Blizzard Breath</td>
						<td>One or two actions and 50 regeneration per turn.  Will stop casting Explodet if Stopspelled (42% chance).</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				Before this fight, re-order the team to replace Cristo with Lucia.  Her Water Flying Clothes, HealAll, and Defense spell make her very useful here.  Focus on attacking him to put him to sleep, and then use the Sword of Decimation if Lucia hasn't already cast Defense.  Once you're set up, either continue attacking to keep him down, or cast Zap for slightly more damage.  If you have it, the powered-up Zenithian Sword can be equipped instead of casting Zap.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Defeat the Gigademon.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover balzack5-bg">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>MP</th>
						<th>Atk</th>
						<th>Def</th>
						<th>Agi</th>
						<th style="width:120px">Attacks</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Gigademon</td>
						<td><a href="#" data-toggle="tooltip" title="Technically his max is only 1023, but he starts with 1200.  His regeneration will actually drop him to 1023 at the end of the first round if you don't deal 177 damage to him first.">1200</a></td>
						<td>8</td>
						<td>230</td>
						<td>40</td>
						<td>5</td>
						<td width=200>Attack, Attack, On Guard (Qtr),<br>Attack, Defense, Attack</td>
						<td>Two actions and 100 regeneration per turn.  Cycles through attacks one at a time on a strict pattern.  Gigademon's "On Guard" ability reduces damage taken by 75%, not the usual 50%, and he will use it even while asleep.</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				Before this fight, re-order the team to put Cristo back in, and equip him with the second Sword of Miracles.  Make sure tactics are on Use No MP and swing at him until he dies.  Cast Zap if he falls asleep.  If he falls asleep turn one and Alena gets crit-happy, you might kill him before he parries, but most likely this fight will take at least four turns.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Defeat the Anderoug.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover anderoug-bg">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>MP</th>
						<th>Atk</th>
						<th>Def</th>
						<th>Agi</th>
						<th style="width:120px">Attacks</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Anderoug (x3)</td>
						<td>300</td>
						<td>0</td>
						<td>193</td>
						<td>175</td>
						<td>60</td>
						<td width=200>Attack, Reinforcements, Attack,<br>Scorching Gas, Reinforcements, Scorching Gas</td>
						<td>Frequently calls for for Anderougs as backup, but is vulnerable to sleep and Defeat/Aeolus.</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				Before this fight, make sure the Hero has the Aeolus shield in his inventory, and Cristo is in your party.  Put your tactic on Offensive so that Cristo casts Defeat, and have Hero spam the Aeolus Shield until it's over.  If you're missing EXP on Brey, these guys are worth 1030 apiece, but you don't get any EXP from the ones the Aeolus Shield removes.  If you want to kill some for XP, the Sleepmore spell is very effective on them.  Cristo should cast Defeat on A or B while Alena and Ragnar attack C.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Defeat Radimvice.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover radimvice-bg">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>MP</th>
						<th>Atk</th>
						<th>Def</th>
						<th>Agi</th>
						<th style="width:120px">Attacks</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Radimvice</td>
						<td>820</td>
						<td><a href="#" data-toggle="tooltip" title="Monsters with 255 MP do not expend MP when they cast spells, effectively granting this enemy unlimited MP.">255</a></td>
						<td>100</td>
						<td>115</td>
						<td>99</td>
						<td width=200>Blazemore, Infermost, Blizzard,<br>Infermost, Attack, Bounce</td>
						<td>Two actions and 50 regeneration per turn.  Begins the fight with Bounce cast, and will re-cast it if removed.  Resistant to Sap and most other spells.</td>
					</tr>
					<tr>
						<td>Demighoul</td>
						<td>134</td>
						<td>0</td>
						<td>155</td>
						<td>35</td>
						<td>66</td>
						<td width=200>Attack, Attack, Attack,<br>ParalyzeHit, Attack, Attack</td>
						<td>Slight chance to paralyze on-hit.  Can dodge physical attacks or split in half, just like Blazeghosts.</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				Before this fight, make sure Cristo is in your party and has the second Sword of Miracles equipped.  If Ragnar has the Mirror Shield and does NOT have the Demon Mail, I recommend unequipping his Dragon Mail so that the Mirror Shield's spell resistances activate.  Just don't forget to re-equip it after the fight...<br>
				<br>
				Start by putting your tactic on Defensive and casting Expel on the Demighouls.  Between Defeat's 40% chance to hit and Expel's 80% chance, this should clean up all three of them.  If it doesn't, depending on your team's health you can either cast Expel again, or start healing your team.<br>
				<br>
				The safe way to handle Radimvice is to cast Fendspell on your entire team.  I start with the character who has the <u>most</u> HP, so that Cristo doesn't attempt to heal them.  Alternatively, you can assume Cristo will go before the Hero and heal your Fendspell target, but keep in mind Radimvice is even faster than Cristo.  When it's the Hero's turn to be buffed, use the Zenithian Shield instead to cast Bounce.  Once Fendspell/Bounce are up on all living characters, you're practically unkillable.  Despite this being "the safe way", you will almost certainly lose a character or two, which really slows down the fight.  Attempting to pick up dead characters with Vivify isn't worth it since he'll likely just re-kill the character immediately, so just attack until Radimvice dies.<br>
				<br>
				The aggressive strat for Radimvice is just to attack him, and hope he goes to sleep.  Switch to Use No MP and swing away.  Once he falls asleep, heal Alena or Hero if they need it, but let Ragnar and Cristo heal themselves with their Swords of Miracles.  Don't bother removing his Bounce or using the Sword of Decimation, as he's very resistant to magic.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Prepare for Necrosaro and head through the castle.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				Before entering the castle, go to Rosaville and sell Ragnar's Sword of Miracles to buy him a Sword of Lethargy, and equip it.  You should have some junk equipment still if you can't quite afford it.  Throw the Aeolus Shield into the wagon and make sure the Hero has the Sword of Decimation, Leaf of the World Tree, and Dew of the World Tree.  Your party order should be Ragnar, Alena, Hero, and Cristo.  Make sure one of them has the Baron's Horn.  Heal and save either in <a href="#" data-toggle="tooltip" title="Soretta is faster if you don't want to save, Last Refuge is faster if you do.  You really don't need to save; Hero should have Vivify, and if he doesn't you can pay to revive Cristo."></a>Soretta or the Last Refuge</a>.<br>
				<br>
				If you don't have the Hat of Happiness, you can optionally try walking through Necrosaro's Castle with just Hero and Ragnar.  You'll spend less MP healing, but there's slightly a higher risk of needing to use Vivify to pick someone up.  But as long as Cristo and Hero both get to Necrosaro with about 50 MP, you should be fine.<br>
				<br>
				Walk to Necrosaro.  If you get caught by the Clay Dolls, you can either attack them and hope they go to sleep, or cast Sleepmore on them.  They can cast Defeat, so be ready to reset if they kill off Cristo or too many other party members.  The random encounters shouldn't be an issue in here as long as you keep your health high.<br>
				<br>
				Once you get through the castle, use the Baron's Horn, and then enter the mountain.  The final battle will begin when you step adjacent to Necrosaro, so stop one tile early and do the final preparations.  Double-check that the Hero's inventory matches the above, and that Hero and Ragnar both have Swords of Lethargy equipped.  Re-order to Ragnar -> Alena -> Hero -> Cristo.  Throw away Alena's hat so that she has <a href="#" data-toggle="tooltip" title="This is to get Cristo to cast Increase twice.  His decision to do this is based on a complex calculation involving each character's defense power multiplied by Necrosaro's chances of attacking each one, so if Hero is leading the party, or if Alena's defense is too high, Cristo will only cast it once.  Ragnar's defense power usually doesn't matter.  If you didn't pick up the Mirror Shield, Cristo will cast Upper on Ragnar after the second Increase.">less than 100 defense power</a>.<br>
				<br>
				When you're ready, <a href="#" data-toggle="tooltip" title="...And hope you don't get a random encounter on the same tile.">step forward to fight Necrosaro</a>.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Defeat Necrosaro.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-container">
			<table class="table table-responsive table-hover necrosaro-bg">
				<thead>
					<tr>
						<th>Enemy</th>
						<th>HP</th>
						<th>MP</th>
						<th>Atk</th>
						<th>Def</th>
						<th>Agi</th>
						<th style="width:120px">Attacks</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Necrosaro 1</td>
						<td>800</td>
						<td>0</td>
						<td>210</td>
						<td>250</td>
						<td>70</td>
						<td width=200>Attack (100%)</td>
						<td>Two actions per turn.  60% Sap resistance.</td>
					</tr>
					<tr>
						<td>Necrosaro 2</td>
						<td>650</td>
						<td>0</td>
						<td>190</td>
						<td>220</td>
						<td>60</td>
						<td width=200>Attack (100%)</td>
						<td>60% Sap resistance.</td>
					</tr>
					<tr>
						<td>Necrosaro 3</td>
						<td><a href="#" data-toggle="tooltip" title="Technically he starts at 1200/1023 HP, but the regeneration algorithm drops him to 1023 immediately after he transforms.">1023</a></td>
						<td><a href="#" data-toggle="tooltip" title="Monsters with 255 MP do not expend MP when they cast spells, effectively granting this enemy unlimited MP.">255</a></td>
						<td>100</td>
						<td>180</td>
						<td>50</td>
						<td width=200>Firebane, Sweet Breath, Snowstorm,<br>Beat, Increase, Attack</td>
						<td>60% Sap resistance.</td>
					</tr>
					<tr>
						<td>Necrosaro 4</td>
						<td>700</td>
						<td>0</td>
						<td>100</td>
						<td>200</td>
						<td>60</td>
						<td width=200>Meditate, Violent Blaze, Freezing Waves,<br>Attack, Violent Blaze, Scorching Gas</td>
						<td>Cycles through attacks in sequence.  20% Sap resistance.</td>
					</tr>
					<tr>
						<td>Necrosaro 5</td>
						<td>800</td>
						<td>0</td>
						<td>230</td>
						<td>220</td>
						<td>70</td>
						<td width=200>Attack (50%), Scorching Gas (50%)</td>
						<td>Two actions per turn.  20% Sap resistance.</td>
					</tr>
					<tr>
						<td>Necrosaro 6</td>
						<td>700</td>
						<td>0</td>
						<td>290</td>
						<td>230</td>
						<td>80</td>
						<td width=200>Attack (66%), Scorching Gas (33%)</td>
						<td>Two actions per turn.  20% Sap resistance.</td>
					</tr>
					<tr>
						<td>Necrosaro 7</td>
						<td><a href="#" data-toggle="tooltip" title="Technically he starts at 1200/1023 HP, but the regeneration algorithm drops him to 1023 immediately after he transforms.">1023</a></td>
						<td><a href="#" data-toggle="tooltip" title="Monsters with 255 MP do not expend MP when they cast spells, effectively granting this enemy unlimited MP.">255</a></td>
						<td>290</td>
						<td>230</td>
						<td>80</td>
						<td width=200>Freezing Waves (2/6), Attack (2/6),<br>Icy Wind (1/6), Violent Blaze (1/6)</td>
						<td>Two actions and 100 HP regeneration per turn.  60% Sap resistance.</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				Round one, change your tactics to Defensive and cast Fendspell on Necrosaro.  This will stop Cristo from casting Defeat/Surround and stop Brey from casting Icebolt.  Starting turn two, use the Sword of Decimation once (aggressive) or put him to sleep by attacking with the Sword of Lethargy first (safer).  If Ragnar or Alena have too much defense power (if you didn't throw away enough armor, or if Alena simply has too much agility) Cristo will cast Upper instead of a second Increase.  If this happens, give up on the second Increase and move on.  Cristo will probably outrun the hero and cast Beat turn one, but Cristo may open with Increase if he outruns the Hero, or if you've died to Necrosaro once Cristo learned Beat doesn't work during the first attempt.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="todo">
				TODO: What if I anticipated Alena having too much defense power/agility and swapped Alena for Lucia to get a second Increase?  Does the buff even matter if Alena doesn't get it?  Ragnar and Alena benefit the most from the Increase casts, since Hero's a tank and Cristo sits in the back.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				On the turn Cristo will cast his second Increase, swap Alena for Nara (should happen after Cristo's turn using Nara's agility), and then swap Cristo for Brey.  Once Necrosaro's defense is lowered and he reaches a certain HP threshhold, Brey should start casting Bikill.  Bring Alena back in after he casts it on the other two.  He'll usually cast Bikill on the character with the most attack power first (Ragnar).<br>
				<br>
				It's most important that Bikill gets cast on Ragnar, since Bikill stops Alena from getting critical hits, but ideally Brey casts it on all three characters before Necrosaro goes into phase two.  If Necrosaro transforms before you're set up, you'll either need to cast Fendspell on him again, or just go without it.  Personally, as long as Ragnar has it, I just push forward.  Alena's crits will mitigate the damage loss, and Hero can cast Zap when Necrosaro is asleep to boost his own damage.<br>
				<br>
				The setup should look something like this:<br>
				<br>
				<div class="table-container">
				<table class="table-responsive">
					<tr>
						<td>Round 1:</td>
						<td>Defensive tactic, Hero casts Fendspell on Necrosaro, Cristo casts Defeat (or Increase if he goes after Hero)</td>
					</tr>
					<tr>
						<td>Round 2:</td>
						<td>Hero land Sword of Decimation once and then attack Necrosaro, Cristo casts Increase.</td>
					</tr>
					<tr>
						<td>Round 3:</td>
						<td>Swap Alena for Nara.  Cristo casts second Increase before Alena leaves.</td>
					</tr>
					<tr>
						<td>Round 4:</td>
						<td>Swap Cristo for Brey, Hero start focusing on healing so you don't kill Necrosaro early, Brey casts Bikill on Ragnar</td>
					</tr>
					<tr>
						<td>Round 5:</td>
						<td>Brey casts Bikill on Hero</td>
					</tr>
					<tr>
						<td>Round 6:</td>
						<td>Tag Alena back in, Brey casts Bikill on Alena.</td>
					</tr>
					<tr>
						<td>Round 7:</td>
						<td>Swap Brey for Lucia, go fully offensive.</td>
					</tr>
				</table>
				</div>
				<br>
				<br>
				If Cristo gets the first Increase on turn 1, or if Hero fails the Sword of Decimation more than once, it may take a few extra turns before Brey starts casting Bikill, but Nara will protect him.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="todo">
				TODO: What exactly is the Bikill HP threshold?  50%?  What is it for phases two, three, and seven?<br>
				TODO: Analyze whether counting his HP can ensure Brey casts Bikill right when he jumps out of the wagon.<br>
				TODO: Does switching weapons reset the hero's attack power? (TO-DID: No!  Bikill doubles damage, not attack power.)
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				After your setup is done, phases one and two are pretty free.  Don't bother lowering his defense power on phases 2-3.  The Sword of Decimation only works on these phases 40% of the time, and you'll do enough damage with Bikill that it's not worth losing a turn to a failed Defense.   Phase 3 is obnoxious, but does very low damage.  Remember that the Hero has the Awake spell in case Phase 3's Sweet Breath catches more than one of your team.<br>
				<br>
				Once his head falls off and you enter Phase 4, you need to start being careful.  Phase 4 attacks on a pattern and uses the Freezing Waves ability every six turns, despite Phase 4 not having fingertips.  Your options for avoiding Freezing Waves are:<br>
				1) Count his actions from the start of the fight.  He'll use Freezing Waves on action 3, 9, 15, 21, 27, etc.<br>
				2) Cast Ironize once the phase begins.  If you don't see him use Waves during Ironize, it'll happen after Violent Blaze (Keep in mind he'll attack instead of meditating if he's at full HP).<br>
				3) Just go for it and cast Ironize after Violent Blaze.<br>
				You also get a free round at the start of Phase 4 when his belly opens up, so if you put him to sleep you likely don't have to worry about Waves at all.<br>
				<br>
				Starting in Phase 4, you want to keep a priority on keeping Necrosaro asleep, but go back to lowering his defense once he's down.  If you think Alena's attacks will kill Phases 4-6, remove her from the team so that Hero or Ragnar push him into the next phase instead.  Their Sword of Lethargy procs will put him to sleep <i>after</i> the transformation occurs.  This is vital for the final phase, but still helps speed through his other phases.<br>
				<br>
				You'll also want to keep Alena out of the fight during phases five and six just to protect her.  Lucia, you can either keep in or take out.  I generally leave her in to cast HealAll and Defense while Hero and Ragnar work on getting him back to sleep.  If Lucia dies, you can pull Cristo in, but try to keep him out of the fight when Necrosaro is awake.  You can swap Alena for a corpse to protect Lucia instead of just removing her from the group, but keep in mind Necrosaro (and Lucia) will get a turn before the swap occurs.<br>
				<br>
				When you reach the final phase, hopefully he immediately goes to sleep.  If so, pull Alena in, use the Sword of Decimation, and start pouring on damage.  Swap Lucia for Cristo so that she doesn't Bounce Defense onto herself.  If he doesn't fall asleep, or if he wakes up before the Sword of Decimation procs, <a href="#" data-toggle="tooltip" title="Three casts gives Ragnar an 80% chance of learning he's immune to Sleepmore.  A fourth cast gets you up to 90%.">cast Ironize 3-4 times to teach Ragnar</a> to attack instead of using the Sword of Lethargy to cast Sleepmore, and hide Alena until his defense is lowered.  The final phase will use Freezing Waves frequently to remove your buffs, but it's much better than seeing his ice breath.  If you get him to sleep and you've done a little damage to him, swap Cristo for Brey to get Bikill back up.  The final phase regenerates a hundred HP per turn, so the more damage you output the harder you'll push past his regen to finish the fight.<br>
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Exit Zenithia Castle.</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				After Master Dragon is done talking to you, walk out of Zenithia castle.  Timing ends as soon as you start moving onto the tile that takes you out of the castle.  GG!
			</div>
		</div>
	</div>
	</div>
	<!--
	Appendix 1: Speed vs Safety
	Appendix 2: Mechanics Minutia
		Encounter rates<br>
		Repel/Fairy Water<br>
		Combat: Turn order, AI decision making, AI learning, coffin blocking<br>
		 - This could be a section on its own...<br>
		 - I don't actually know how a lot of combat works in DW4 specifically, and assume it works the same as DW3.<br>
		Glitches (Maybe include FC glitches?)<br>
		 - Should probably be its own appendix<br>
		Minigames: Casino, the three Chapter Three money making games, free casino coins in C5
	Appendix 3: Probability Simulations
		Anything I've run sims on, such as boss fights or metal slime encounter odds.
	
	FC/NES version differences?
	dear god, FC/NES/PS1/DS version differences?
	Closing: Sources and Other References
	-->
	<div class="row">
		<div class="col-sm-12">
			<h3>Appendicies</h3>
		</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Appendix I. Common Speed vs Safety Compromises</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				This guide has a solid focus on detailing the route a runner would take through the game to beat the game as fast as viably possible, but there are many things you should do differently in your first runs, or in situations where you want to complete a full run without restarting the game.  The guide above mentions many of these compromises as they come up, but this appendix will highlight the big ones.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
				In general, grinding out more experience points is safer.  There are many places you can get an extra level or two to help your odds of beating the next boss(es) without spending so much time that you could've just fought the boss a few extra times instead.<br>
				<br>
				Chapter One:  If you have low HP (less than 45) at level six, it's not a bad idea to get up to level seven before fighting Saro's Shadow.  It'll cost you less than two minutes, but a trip back to the boss is usually about three.  Normally I'll just fight the boss at level six no matter what, and if I die to him once I'll get level seven as I walk back to him.<br>
				<br>
				Chapter Two:  This one is also stat-dependent, but if you have <a href="#" data-toggle="tooltip" title="Under 80 HP and/or under 42 strength. Being under on both gives you a 15-30% chance to win the tournament.">below average stats</a> on Alena at level 11, you'll want to get her to level twelve.  This can mean killing another Metal Slime, or fighting more trash outside Endor.  If you were farming Metal Slimes, you can Return to the Bazaar and fight out there until Brey hits 11 and learns Snowstorm, and then go back to Endor.<br>
				<br>
				Chapter Five:  In early runs, I would strongly encourage runners to get extra levels out of the Metal Babble grind.  At minimum you need the Hero to learn Zap, but one more level on Cristo gets you HealAll, another level on Hero gets you a second HealAll, and a second level on Cristo gets you Vivify.  Each extra Metal Babble you kill should net you one of the above bonuses, in the listed order.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
				If you're not pushing to set a new world record, it's a good idea to grind on Birdsong/Endor enemies in Chapter Two instead of Metal Slimes.  The Metal Slime grind is extremely unreliable, and under half of your Metal Slime grinds will end up faster than the alternative.  I would only recommend using the Metal Slime grind to someone who has a sub seven hour personal best.<br>
				<br>
				When you do this alternate grind, you can also consider saving right before Alena hits level 11 and resetting if she doesn't gain much strength.  She usually gains 2-5 strength, so resetting to ensure you get 4-5 could really increase your odds of a first try tournament win.  You can even check your stats at level 9 and consider doing the same savescumming for level 10 if you think you're low on strength or even HP.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="alt-strat">
				At the end of Chapter Three, you can fill up Taloon's inventory with Abacus of Virtue or Iron Aprons to sell in Chapter Five.  This will cost you about two minutes of menuing, more if you have to make a special trip to get more money just for this, but it'll let you buy more defense power for Ragnar and the Hero.  With this extra money, during the Rosaville shopping trips, you can buy Dragon Mail and Iron Helmets or Masks for both characters.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Appendix II. Mechanics Minutia</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="todo">
				TODO: Still thinking about what to put in these appendices vs just linking to a folder of txt files, but I think some good stuff could go in a section about mechanics...<br>
				UPDATE: Still need to "write" this section, but here's some links:<br>
				<a href="https://cowness.net/Speedrunning/DW4 Notes/" target="_blank">https://cowness.net/Speedrunning/DW4 Notes/</a><br>
				<a href="https://cowness.net/Speedrunning/FCEU LUA Scripts/" target="_blank">https://cowness.net/Speedrunning/FCEU LUA Scripts/</a><br>
				TODO: I need a writeup on the glitches I know about
			</div>
			<div class="details">
				<h5>Dragon Warrior IV Glitches</h5>
				<br>
				All of the glitches below are allowed in DW4 RTAs, because none of them allow you to perform story sequence breaks.  This ruling will likely change and an additional RTA category may be created if major skips are ever found.<br>
				<br>
				<h6>"Repel Glitch"</h6>
				This bug isn't technically a flaw in how Repel works, but repelling enemies is how we apply it to the speedrun.<br>
				<br>
				Repel, Fairy Water, and <a href="#" data-toggle="tooltip" title="I haven't confirmed this personally, but I'm told all of this applies to the monster arena as well.">the casino monster arena</a> operate based on your highest leveled party member.  However, instead of checking your whole party every time it needs to know the highest level, the game writes down the highest level into a memory address that isn't always updated.  I have <a href="#" data-toggle="tooltip" title="It should be titled &quot;On Repel.txt&quot; somewhere in the DW4 Notes directory.">a file in my notes folder</a> with more details, but it basically updates after battle (unless you run), between chapters, and when you load the game, and it only considers members in the wagon if you have the wagon with you.  Additionally and more importantly, it recognizes <a href="#" data-toggle="tooltip" title="?-level characters like Healie">"guest" party members</a> as <a href="#" data-toggle="tooltip" title="If you look at my table of monster stats, these numbers are their index in that table.">levels 198-205</a>, so if you have a guest in your team (or haven't fought/reset since losing one) you can repel any enemy on the overworld.  As for the casino, I'm told it moduluses the party's level by 128, so technically it will only see you as level 70-77, but I'm not convinced the monster formations change when you're higher than that.<br>
				<br>
				<h6>"Coffin Blocking"</h6>
				This is a pretty tame glitch, but very useful in the speedrun.  Most enemies in this game have a higher chance when using basic physical attacks to target the character you put in the front of the party than the characters behind them.  However, there is a flaw in this targeting routine that makes these monsters ignore the backmost living character if there is a dead character somewhere in front of them.  For example, if your party order is Alena, Brey, Cristo, and Brey is dead, most monsters won't be able to target Cristo.  Some monsters (noted in my monster data chart) have "unweighted" targeting -- meaning they have an equal chance to strike each party member -- and that form of targeting does not have this flaw.  All spells use unweighted targeting as well, and area attacks will still hit all characters.<br>
				<br>
				<h6>Double-Door/Treasure Map Glitch</h6>
				Applications of this bug are disappointingly limited, but if you open the Treasure Map in a town with the large sets of double-doors (Rosaville, most castles) the doors will close.  Not a big deal, except that these doors act strangely when you open them from above or from the sides, which you can do if you exit such a building and then use the map while still standing on the door.  I haven't studied the exact behavior, but opening these doors from other directions will spawn a new door, offset by one or two tiles based on which direction you're facing, and <a href="#" data-toggle="tooltip" title="In fact, all double-doors on the map will open at the same time.  The game never has multiple sets of these doors on one map, except in Stancia where they all default to open.">they'll both open</a>.  You can always stand on the lower two tiles of these doors, so being able to spawn more doors allows you to get <a href="#" data-toggle="tooltip" title="Out of the intended boundaries, rather.  You will still exit the town if you walk too far away, and if you spawn a door outside of the town limits, the game will crash.">out of bounds</a> in some areas.<br>
				<br>
				There are only a couple of uses for this, and none of them benefit the speedrun.  The closest is that you can get the Multi-Edge Sword in Endor before getting the magic key, but the magic key is available as soon as the Treasure Map is available, so that's not too useful.<br>
				<br>
				The most interesting use is that you can talk to an out-of-bounds NPC in the <a href="#" data-toggle="tooltip" title="You can actually see his feet without going out of bounds.">top-right corner of Endor</a>, but he just repeats something originally said by an NPC in the bazaar in chapter two.<br>
				<br>
				Additionally, you can use this to break out of Zenithia after beating Necrosaro without triggering the end sequence (jump in the hole to the Final Cave and die to the clay dolls in Necrosaro's castle), which lets you visit some towns when they're set up for the ending cutscenes.  There's also something screwy you can do in the Final Cave to glitch the overworld and wrong warp to the Shrine of Breaking Waves (which gets you stuck surrounded by water and mountains without the ship), but I don't know the specifics of it.  There's a video of someone doing this one on the Famicom version, and I messed with it a little and believe it works the same way on NES, but don't remember the steps to reproduce it.  The Famicom version can skip the barrier/minibosses before Necrosaro by jumping out of the Final Cave on a specific tile, but this doesn't work on NES because an out-of-bounds memory pointer isn't pointing at the same memory addresses.<br>
				<br>
				<h6>Walk Around as Ghosts</h6>
				As long as the second character in your party is a living character who isn't the Hero and isn't carrying key items (Magic Key, Magma Staff, likely others), Gardenbur will throw that character in jail even if the rest of your team is dead or otherwise uncontrollable.  This can lead to you having a team that's all ghosts and/or Panon and still being able to walk around.  Note that there are a lot of actions from this state that can trigger the game to check who's in your party and, if you're somewhere without access to the wagon, cause softlocks, including re-ordering the party, casting spells, and using items.<br>
				<br>
				If you walk out to the world map, you can get into battle, but after one round you'll trigger a wipe.  If Panon is alive, you can attempt to run, but exiting the battle makes the game acknowledge that you shouldn't be able to walk around, and if you can't access the wagon you'll softlock.  If Panon is the only character in your party, you should always run away first try, so it's unfortunate that you can't continue after the battle ends...<br>
				<br>
				<h6>Gardenbur at Night</h6>
				Gardenbur is normally inaccessible at night, but if you save at Gardenbur, save again at the Last Refuge during night time, and reset the game, you will start at Gardenbur during the night.  The castle's "night time map" has no NPCs on it other than the guards blocking the front door, so there's not a whole lot you can do in here.<br>
				<br>
				<h5>Dragon Quest IV (Famicom) Glitches</h5>
				<br>
				Some glitches were fixed when they ported DQ4 to the NES, but as far as I know, no new bugs were introduced.  Standard DQ4 FC "bug limit" runs ban three of the glitches below, but there's a separate category with a few times on its board where anything goes.<br>
				<br>
				<h6>Holy Water Bug</h6>
				When you use Holy Water (Fairy Water) on an enemy in DQ4/DW4, it deals about ten points of damage.  In the North American release it uses the Expel resistance value, but in the Japanese release it will work on all enemies every time, including Metal Slimes.  This glitch is notably allowed in standard DQ4 FC "bug limit" RTAs.<br>
				<br>
				<h6>Invisible Balloon Gltich (Banned)</h6>
				Before turning in the Gas Canister, there's a balloon sitting, invisible, in the corner of the map at coordinate 0,0.  You can find it by sailing <a href="#" data-toggle="tooltip" title="Give or take one or two in either direction based on how you interpret my bad description of the initial position.">three tiles north and fourteen tiles west</a> after getting the NW corner of Stancia island in the bottom-right corner of your screen.  The balloon returns to the corner of the map when you enter a town, so it's not useful for general travel, but you can use it to sequence break to Gardenbur, the World Tree, and Gottside.<br>
				<br>
				<h6>"8x Run Glitch" (Banned)</h6>
				When you fail to run more than three times, which can only happen in boss fights, the counter that tracks your run fails overflows and starts setting other combat flags.  The fourth failure will set the flag that determines whether or not you've used the Sandglass of Regression <a href="#" data-toggle="tooltip" title="I'm not entirely sure why this flag exists.  It tracks whether you've used it since the last inn stay, which determines whether or not the sandglass is usable, elsewhere.">during the current battle</a>, and the eighth will set a flag used by the Chance spell that causes all of your attacks to be critical hits.  This means if you fail to run eight times, or <a href="#" data-toggle="tooltip" title="Note that using the Sandglass SETS the bit, it's not an increment, so it won't carry over if it's already set.  This means if you run four times before using the sandglass, using it will not help you get to the crit flag faster.  I recommend running three times, using the Sandglass, and then running again.  Also note that the Sandglass has to actually work, so if you used it in another battle since your last inn stay, it will not help you.  However, even though the Sandglass resets the battle, it doesn't reset your run count.">use the Sandglass</a> and fail to run four times, you will get critical hits for the rest of the battle.  Since running eight times will also require a few recovery turns, and battles don't generally last 8-12 rounds, I've only found this to be useful against Necrosaro or to salvage a really bad Radimvice fight, but if you pick up the sandglass it might be useful against other slow fights like Bakor or the Gigademon.  I've also seen it used on Linguar, but that's really just bad luck protection.<br>
				<br>
				<h6>Casino Coin Price Overflow (Banned)</h6>
				When you purchase more than <a href="#" data-toggle="tooltip" title="This is the highest value that can be stored in three bytes of data: 256^3, or 2^24.">16,777,216 gold</a> worth of coins, the price underflows and you'll only have to pay the modulus of the expected amount and 16,777,216.  This means in chapter five where coins cost 20 gold, if you buy 838,861 coins, <a href="#" data-toggle="tooltip" title="838861 * 20 - 16777216 = 4">the price will overflow</a> and you'll only be charged four gold.  In chapter three, coins cost 200 gold, so you could buy 83,887 coins and only have to pay 184 gold.  Since you can't buy more than 999,999 coins at once, you can't perform this glitch in chapter two, where coins only cost 10 gold.
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="step col-sm-12">Appendix III. Credits, Thank-Yous, and Additional Resources</div>
	</div>
	<div class="detail-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="details">
				All of the text and HTML in this document was painstakingly hand-typed into good ol' Notepad++ by myself, TheCowness.  All data and images were mined/created by me unless otherwise directly cited.<br>
				<br>
				This document is not to be hosted publicly on another domain or server without my consent, but may be saved privately for personal use.  If quoting or referencing this web page in your own document, please credit me by username (TheCowness) and provide a link to the full guide.<br>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="details">
				<h6>In chronological order,</h6><br>
				Thanks to my mother for helping me get through the original Dragon Warrior when I was like four years old.  The four year olds I've met during my adulthood have made this achievement feel particularly impressive.<br>
				<br>
				Thanks to all of the buddies I made playing Dragon Warrior themed fangames in the early 00's, most of whom I still talk to on a daily basis.  They're the main reason this run means enough to me to stick with it this long.<br>
				<br>
				On that note, thanks to the buddies I've made more recently playing and watching these games (and others) on Twitch.<br>
				<br>
				Thanks to NESCardinality for providing the initial inspiration to speedrun such a long video game, as well as the VOD I based my original route on (<a href="https://www.speedrun.com/dw4/run/8y813xwz" target="_blank">his 6:40 run from 03/14/2015</a>).<br>
				<br>
				Thanks to Everhate for assisting with my early runs of both Dragon Warrior IV and Dragon Warrior III, and (to my knowledge) for coming up with the original NES speedrun route for the game, based on Japanese Famicom runs.<br>
				<br>
				Thanks to EvilAsh25 for digging up some useful Japanese-language docs detailing how things work in DQ4 FC, for helping parse Google Translated versions of those docs, for his own independent research and scripting, and for assistance in re-routing chapter five in 2018.<br>
				<br>
				And, of course, thanks to Linguar for inventing 25%.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="commentary">
				<a href="https://speedrun.com/dw4" target="_blank">Dragon Warrior IV Speedrun.com Leaderboard</a><br>
				<a href="https://goo.gl/1VyfSA" target="_blank">Dragon Quest RTA Compendium</a> - Data and routes for numerous Dragon Quest games, including all main-series games.<br>
				<a href="https://discord.gg/Z9gqtMs" target="_blank">Dragon Quest RTA Discord Server</a> - All of the people who have contributed to the Compendium hang out in here, so stop by if you've got questions about any game in the series.<br>
				<hr>
				<a href="https://cowness.net/Speedrunning/DW4_Monster_Stats.php" target="_blank">Dragon Warrior IV Monster Data</a> - (Most) stats for every enemy in the game, ripped directly from the ROM.<br>
				<a href="https://cowness.net/Speedrunning/DW4_Stat_Deviations.php" target="_blank">Dragon Warrior IV Character Stat Data</a> - In case you're curious what the odds are of having certain stats at certain levels.<br>
				<a href="https://cowness.net/Speedrunning/" target="_blank">https://cowness.net/Speedrunning/</a> - This web directory contains a lot of my unorganized notes for all four NES DW games.<br>
				<hr>
				<a href="https://www.woodus.com/den/games/dw4nes/" target="_blank">Dragon Warrior IV on Dragon's Den</a> - A <a href="#" data-toggle="tooltip" title="Every now and then I find some inaccuracies or missing information, but a lot of their hard data is ripped from the games' ROM data.  The site is also very lacking on data for the games and remakes that were never released in the West.">98% reliable</a> source for general data for the whole DQ series.  Recommend the DW4 overworld maps (which include encounter zones), small medal locations, and EXP level requirements.<br>
				<a href="https://gamefaqs.gamespot.com/nes/563409-dragon-warrior-iv/faqs" target="_blank">Dragon Warrior IV on Gamefaqs</a> - Recommend <a href="#" data-toggle="tooltip" title="These maps look like they were hand-drawn in Paint, but they look good enough and have the data you need.  Check Dragon's Den for screenshotted maps.">StarFighters76's dungeon maps</a> for treasure chest/item locations, <a href="#" data-toggle="tooltip" title="This NPC dialogue dump seems to have been painstakingly collected by manually talking to every NPC in the game after a plot trigger was expected to change something.  Not sure how much text is omitted from the manual process, but it seems pretty comprehensive.  I've used it to find where NPCs mention important items and triggers.">Speeches guide by rulerofevil2k</a>, and <a href="#" data-toggle="tooltip" title="This doc is pretty technical, and I haven't confirmed any of the data in it myself, but it seems legit.">Taloon's Commission Guide by Admiral</a>.<br>
			</div>
		</div>
	</div>
	</div>
</div>
<script type="text/javascript">
	$("document").ready(function(){
		
		$(".step").each(function(){
			if($(this).parent().next().is(".detail-container")){
				$(this).addClass("hasdetail");
				$(this).html('<i class="fas fa-plus"></i>'+$(this).html());
			}else{
				$(this).addClass("nodetail");
			}
		});
		
		//Toggle to open expanations
		$(".step.hasdetail").click(function(){
			$(this).parent().next(".detail-container").toggle();
			$(this).children("i").each(function(){
				if($(this).hasClass("fa-plus")){
					$(this).removeClass("fa-plus").addClass("fa-minus");
				}else{
					$(this).removeClass("fa-minus").addClass("fa-plus");
				}
			});
		});
		
		$(".detail-container").hide();
		
		$(".expand-all").click(function(){
			//If there are no hidden fields, hide them all.  Else, show them all.
			if($('.detail-container:hidden').length == 0){
				$(".detail-container").hide();
				$(".step.hasdetail").each(function(){
					$(this).children("i").each(function(){
						if($(this).hasClass("fa-minus")){
							$(this).removeClass("fa-minus").addClass("fa-plus");
						}
					});
				});
			}else{
				$(".detail-container").show();
				$(".step.hasdetail").each(function(){
					$(this).children("i").each(function(){
						if($(this).hasClass("fa-plus")){
							$(this).removeClass("fa-plus").addClass("fa-minus");
						}
					});
				});
			}
		});
		$(function() {
			var bar = $('#headerSlideContainer');
			var top = bar.css('top');
			$(window).scroll(function() {
				if($(this).scrollTop() > 200) {
					bar.stop().animate({'top' : '0px'}, 500);
				} else {
					bar.stop().animate({'top' : top}, 500);
				}
			});
		});
		
		//Initialize tooltips
		$('[data-toggle="tooltip"]').tooltip(); 
		$('a[data-toggle="tooltip"]').click(function(){ return false; });
		
		//Move the Linguar tongue around
		$('#linguar-tongue').css("top","92px");
		$('#linguar-tongue').css("left","166px");
		setInterval(function(){
			if($("body").width() > 1000){
				var tongueSlots = [[92,166],[104,366],[110,564],[104,776],[340,172],[340,370],[340,568],[340,766]];
				var slot = tongueSlots[Math.floor(Math.random()*tongueSlots.length)];
				$('#linguar-tongue').show();
				$('#linguar-tongue').css("top",slot[0]);
				$('#linguar-tongue').css("left",slot[1]);
				setTimeout(function(){
					$('#linguar-tongue').hide();
				},2500);
			}else{
				$('#linguar-tongue').hide();
			}
		},3000);
		//Hun:  92,166
		//Ror: 104,366
		//Viv: 110,564
		//Sam: 104,776
		//Lin: 340,172 -> 340,370 -> 340,568 -> 340,766
	});
</script>
<style type="text/css">
body{
	background-color: #eeeeff;
	background: url(/DW4Guide/images/sciencebackgroundimage2.jpg);
	font-size:16px;
}
h3{
	padding-top:24px;
}
.guide-container{
	width:100%;
	max-width: 1000px;
	background-color: #fff;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
	margin: 0 auto;
	padding: 32px;
	opacity: 1;
}
.expand-all{
	cursor:pointer;
}
.step{
	cursor:pointer;
	padding: 2px 0px 2px 48px;
}
.step:hover{
	background-color:#f3f3ff;
}
.hasdetail{
	padding-left:40px;
}
.nodetail{
	padding-left:40px;
}
.step>i.fas{
	position:absolute;
	left:22px;
	top:7px;
	color:#666;
	font-weight:bold;
	font-size:12px;
}
.details{
	margin: 8px 32px;
	padding: 12px;
	background-color: #fff9cc;
	border-radius: 12px;
	border: 1px solid #eecc33;
	box-shadow: 0 4px 8px 0 rgba(100, 100, 0, 0.09), 0 6px 8px 0 rgba(100, 100, 0, 0.09);
}
.commentary{
	margin: 8px 32px;
	padding: 12px;
	background-color: #ddddff;
	border-radius: 12px;
	border: 1px solid #7777ff;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 100, 0.09), 0 6px 8px 0 rgba(0, 0, 100, 0.09);
}
.alt-strat{
	margin: 8px 32px;
	padding: 12px;
	background-color: #99ff99;
	border-radius: 12px;
	border: 1px solid #00cc00;
	box-shadow: 0 4px 8px 0 rgba(0, 100, 0, 0.09), 0 6px 8px 0 rgba(0, 100, 0, 0.09);
}
.aggro-strat{
	margin: 8px 32px;
	padding: 12px;
	background-color: #ffdddd;
	border-radius: 12px;
	border: 1px solid #ff9999;
	box-shadow: 0 4px 8px 0 rgba(100, 0, 0, 0.09), 0 6px 8px 0 rgba(100, 0, 0, 0.09);
}
.todo {
	margin: 8px 32px;
	padding: 12px;
	background-color: #eef;
	border-radius: 12px;
	border: 1px solid #99f;
	color: #669;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.09), 0 6px 8px 0 rgba(0, 0, 0, 0.09);
}
.centered-image-container{
	text-align:center;
	width:100%;
}
.centered-image-container img{
	text-align:center;
	width:100%;
	max-width:500px;
}
.table-container{
	margin: 8px 32px;
}
.details table td, .details table th{
	border-color: black;
}

#headerSlideContainerContainer {
	width:100%;
	max-width: 1000px;
	background: #fff;
	margin: 0 auto;
	opacity: 1;
	z-index: 100;
}
#headerSlideContainer {
	background: #fff;
	width: 100%;
	max-width: 1000px;
	position: fixed;
	top:-100px;
	opacity: 1;
	z-index: 101;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.05), 0 6px 8px 0 rgba(0, 0, 0, 0.05);
}
#headerSlideContent {
	background: #fff;
	width: 100%;
	max-width: 1000px;
	height: 100px;
	margin: 0 auto;
	color: black;
	border-bottom: 1px solid #ccc;
	opacity: 1;
	z-index: 102;
	text-align: center;
}
.expand-all-header{
	font-size: 12px;
}
.saro-shadow-bg{
	background-image: url("images/ShadowAndEyeballOutlinedFaded.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: 348px;
	//display:none;
}
.chameleon-humanoid-bg{
	background-image: url("images/Ch2HumanoidFaded.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: 572px;
	//display:none;
}
.tournament-bg{
	background-image: url("images/Ch2TournamentBossesFaded.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: 774px;
	//display:none;
}
.balzack4-bg{
	background-image: url("images/Ch4BalzackTorsoFaded.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: 476px;
	//display:none;
}
.urchin-bg{
	background-image: url("images/Ch5UrchinFaded.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: 654px;
}
.lighthouse-bg{
	background-image: url("images/Ch5LighthouseFightFaded.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: 700px;
}
.balzack5-bg{
	background-image: url("images/Ch5BalzackFaded.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: 333px;
}
.radimvice-bg{
	background-image: url("images/Ch5RadimviceFaded.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: 360px;
}
.anderoug-bg{
	background-image: url("images/Ch5AnderougFaded.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: 210px;
}
.infernusshadow-bg{
	background-image: url("images/Ch5InfernusShadowFaded.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: 249px;
}
.esturk-bg{
	background-image: url("images/Ch5EsturkFaded.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: 330px;
}
.necrosaro-bg{
	background-image: url("images/Ch5Necrosaro7Faded.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: 886px;
}
.keeleon-bg{
	background-image: url("images/Ch5KeeleonFaded.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: 201px;
}
.bakor-bg{
	background-image: url("images/Ch5BakorFaded.png");
	background-repeat: repeat-x;
	background-position: center;
	background-size: 154px;
}
#linguar-tongue{
	position:absolute;
	background-image: url("images/LinguarTongueFaded.png");
	//background-image: url("images/LinguarTongue.png");
	//opacity: 0.1;
	width: 30px;
	height: 42px;
	background-repeat: no-repeat;
	background-size: 30px 42px;
}
</style>
</body>
</html>