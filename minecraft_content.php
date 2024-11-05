<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A detailed overview of Minecraft, including features, biomes, and tips.">
    <title>Minecraft Universe</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            transition: background-color 0.3s ease;
        }
        .skip-link {
            position: absolute;
            top: -40px;
            left: 10px;
            background: #4CAF50;
            color: white;
            padding: 8px;
            z-index: 1000;
            transition: top 0.3s;
        }
        .skip-link:focus {
            top: 10px;
        }
        header {
            background: linear-gradient(90deg, #3a8700, #6eb500);
            color: white;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
        }
        h1 {
            font-size: 4em; 
            margin: 0;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
            letter-spacing: 4px;
            text-transform: uppercase;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            transition: background-color 0.3s, color 0.3s;
        }
        nav a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
            border-radius: 5px;
        }
        section {
            border: 1px solid #ccc;
            background-color: white;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        section:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }
        h2 {
            font-weight: bold;
            margin-top: 10px;
            color: #333;
        }
        p, ul {
            text-align: left;
            margin: 10px 0;
            font-size: 16px;
        }
        .important {
            color: black;
            text-decoration: underline;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 5px 0 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            border-color: #4CAF50;
            outline: none;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        @media (max-width: 600px) {
            h1 {
                font-size: 2.5em;
            }
            nav ul li {
                display: block; /* Stack the nav items */
                margin: 5px 0;
            }
        }
    </style>
    <script>
        function checkPassword() {
            const password = prompt("Please enter the password to access the Minecraft Universe:");
            if (password === "amralimaldives8480") {
                document.getElementById("content").style.display = "block";
            } else {
                alert("Incorrect password! Access denied.");
                // Consider redirecting or hiding content instead of closing the window
                document.getElementById("content").style.display = "none";
            }
        }
    </script>
</head>
<body onload="checkPassword()">
    <a href="#content" class="skip-link">Skip to content</a>
    <div id="content" style="display: none;">
        <header>
            <h1>Welcome to the Minecraft Universe</h1>
            <nav role="navigation">
                <ul>
                    <li><a href="#about">About Minecraft</a></li>
                    <li><a href="#features">Game Features</a></li>
                    <li><a href="#biomes">Biomes</a></li>
                    <li><a href="#mobs">Mobs</a></li>
                    <li><a href="#resources">Resources</a></li>
                    <li><a href="#community">Community</a></li>
                    <li><a href="#updates">Recent Updates</a></li>
                    <li><a href="#tips">Tips & Tricks</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
        </header>

        <section id="about">
            <h2>About Minecraft</h2>
            <p><span class="important">Minecraft</span> is a sandbox video game developed by Mojang Studios. Players can build and explore virtual worlds made up of blocks, engaging in activities such as crafting, mining, and combat. The game has captivated millions of players worldwide since its release in 2011. For <a href="https://minecraft.fandom.com/wiki/Minecraft_Wiki" target="_blank">more info</a>, visit the Minecraft Wiki.</p>
            <p>Official website: <span class="important"><a href="https://www.minecraft.net/en-us" target="_blank">Minecraft Official Site</a></span></p>
        </section>

        <section id="features">
            <h2>Game Features</h2>
            <ul class="feature-list">
                <li><span class="important">Creative Mode</span>: Unlimited resources to build and create.</li>
                <li><span class="important">Survival Mode</span>: Manage health and hunger while exploring.</li>
                <li><span class="important">Adventure Mode</span>: Play custom maps created by other players.</li>
                <li><span class="important">Multiplayer</span>: Play with friends or join servers worldwide.</li>
                <li><span class="important">Redstone</span>: Create complex machinery and contraptions.</li>
                <li><span class="important">Enchanting</span>: Enhance your tools and armor with magical effects.</li>
            </ul>
        </section>

        <section id="biomes">
            <h2>Biomes</h2>
            <p>Minecraft features a variety of biomes, each with unique terrain and resources. Some popular biomes include:</p>
            <ul class="biome-list">
                <li><span class="important">Forest</span>: Dense trees and wildlife.</li>
                <li><span class="important">Desert</span>: Sand, cacti, and temples.</li>
                <li><span class="important">Mountain</span>: High elevations with stone and ores.</li>
                <li><span class="important">Ocean</span>: Water, coral reefs, and shipwrecks.</li>
                <li><span class="important">Taiga</span>: Cold forests with spruce trees and wolves.</li>
                <li><span class="important">Swamp</span>: Waterlogged areas with unique flora and fauna.</li>
            </ul>
        </section>

        <section id="mobs">
            <h2>Mobs</h2>
            <p>The game includes various mobs (mobile entities), which can be friendly, neutral, or hostile:</p>
            <ul class="mob-list">
                <li><span class="important">Sheep</span>: Passive creatures that provide wool.</li>
                <li><span class="important">Creeper</span>: Hostile mob that explodes when close to the player.</li>
                <li><span class="important">Enderman</span>: Tall, teleporting creatures that can pick up blocks.</li>
                <li><span class="important">Zombie</span>: Undead mob that attacks players.</li>
                <li><span class="important">Villager</span>: NPCs that can trade with players.</li>
                <li><span class="important">Ghast</span>: Floating creatures in the Nether that shoot fireballs.</li>
            </ul>
        </section>

        <section id="resources">
            <h2>Resources</h2>
            <p>Players can gather a range of resources, including:</p>
            <ul class="resource-list">
                <li><span class="important">Wood</span>: Obtained from trees, used for crafting.</li>
                <li><span class="important">Stone</span>: Mined from mountains and caves.</li>
                <li><span class="important">Iron</span>: A valuable metal used for tools and armor.</li>
                <li><span class="important">Diamonds</span>: Rare and powerful resource for advanced items.</li>
                <li><span class="important">Gold</span>: Useful for crafting and trading.</li>
                <li><span class="important">Redstone</span>: Essential for creating complex contraptions.</li>
            </ul>
        </section>

        <section id="updates">
            <h2>Recent Updates</h2>
            <p>Minecraft regularly releases updates to improve gameplay and introduce new features. Recent updates include:</p>
            <ul>
                <li><span class="important">Nether Update</span>: Expanded Nether dimension with new blocks and creatures.</li>
                <li><span class="important">Caves & Cliffs Update</span>: Overhauled cave systems and new mountain terrain.</li>
                <li><span class="important">Wild Update</span>: New mobs and biomes to explore.</li>
            </ul>
            <p>For detailed patch notes, visit the <span class="important"><a href="https://www.minecraft.net/en-us/article/minecraft-java-edition-1-20-1-pre-release-1" target="_blank">official patch notes</a></span>.</p>
        </section>

        <section id="tips">
            <h2>Tips & Tricks</h2>
            <p>Here are some helpful tips for new players:</p>
            <ul>
                <li><span class="important">Always carry food</span> to restore health and hunger.</li>
                <li><span class="important">Use torches</span> to light up your surroundings and prevent mob spawns.</li>
                <li><span class="important">Build a shelter</span> before nightfall to protect yourself from hostile mobs.</li>
                <li><span class="important">Experiment with crafting</span> to discover new recipes.</li>
                <li><span class="important">Join a community</span> to share experiences and learn from others.</li>
            </ul>
        </section>

        <section id="contact">
            <h2>Contact Us</h2>
            <p>If you have any questions or feedback, feel free to reach out!</p>
            <form action="https://formspree.io/f/xyzyevlv" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <input type="submit" value="Send">
            </form>
        </section>

        <footer>
            <p>&copy; 2024 Minecraft Universe. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
