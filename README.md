## Respins.io
Respins.io is a toolbox based and meant for development within casino industry, whereas normally needing multi-system setup and more often then not you will not be able to locally/offline develop as relying on many aspects that are usually online.

In our case we are using and enforcing methods as used by BlueOcean.com, Softswiss.com etc. on their productional casino's - however this in contrary to the prior mentioned this should be used without malicious intent or any fraud activities.

Main goal is to combine (in package form) the following 3 industry areas within a single toolbox that you can fire up whenever and within minutes:

 - **Game Provider (gamedeveloper-level)**
    In this project we are emulating provider's slotmachine & iGaming products to retain the most authenticate technical experience. These are in seperated, per-provider, packaged up for you to implement - these guide as example for your own games to easily setup your own dev area.

 - **Aggregation (distribution-level)**
    Emulating the technical link between the game-provider and the casino by relaying the info back and forth between the two.

 - **Operator (casino-level)**
    Think of casino-level adding/subtracting to balance based, authentication scaffolding and hopefully in time I can focus more on this area as I do enjoy this personally the most to develop & create, but as all is open source it's depending on what people want/need and how many of you guys will contribute to this project & community

This is a project actively in the making and completely free of charge & open-source. Visit [www.respins.io](https://respins.io) for more information on how you can participate development.

## Future
In future I would want to build more in regards to (open) or semi-open (freemium) sourced casino software (operator side). 

However in meantime I plan myself to release continued free of charge snippets & modules while providing free support to anyone needing help on setup and whatsoever through our community links, check [www.respins.io](https://respins.io)

## Tech
Initial setup is to try and package up as much as possible so that it becomes easy to lightweight opt-in specific features & moduels you actually need. Though however due to increasing lack of motivation to keep re-create the same (before being able to start with fun bit), I will be putting packaged in following setup:

- "respins-laravel"
    This is simply laravel baseplate, all contributors & myself are trying to keep this as close paired (if not actually 1:1 paired) to the original laravel project so you can keep this really as a simple and fast solution to setup or test iGaming development on your machine. This opens up for great amount of open source & strong supported plugins, visit [madewithlaravel.com](https://madewithlaravel.com) for glimpse of cool stuff that is available to all.

- "respins-base-functions"
    Initial functions to just get your first games working (closely paired could be considered being aggregation functions).
    Includes database migrations, seeding and so on.
    Includes helpers, as example: 
        Like proxy facades so you can communicate easily with genuine gameprovider servers, in most cases employing Softswiss/BlueOcean methods like f.e. changing demo games to look like genuine $/EUR games and what not. 
    This also holds the base in/out authentication and serves as normalization of win/loss/transactional storing etc. etc.

- "respins-game-X" (replace X by gameprovider/gamecategory, like name format f.e. respins-game-pragmaticplay etc.)
    Will try to keep game packages as opt-in standalone's so that it gives total and complete freedom on what type of games and what type of setup you can use.
    Releases under Respins.io will always be based on existing games and existing methods to be able to use these games for free.

Some included tech-stack:
 - PHP Backend (Laravel)
 - Minio
 - Maria DB
 - Redis
 - Basic frontend scaffolding support for Blade, Vue.js, React, Livewire and more
 - Selenium (browser emulation)
 - Socketti & Pusher (nodejs/websocket)
 - Envoy

## Disclaimer
While technical methods/setups used are similarly used within production environments on casino's like [Bc.game](https://www.bc.game), [Stake.com](https://www.stake.com), [Sportsbet.com](https://sportsbet.com) and world's biggest iGaming distributors like [Softswiss.com](https://softswiss.com) & [BlueOcean.com](https://www.blueocean.com):

**You should refrain from malpractice like the skipping of big-win spins (this is where name Respins.io originates from) and any other illegal activities with actual gamblers.** Instead just use those that are actively abusing, as they are the ones responsible for any malpractice - not you. Those illegal gambling providers include:

Evolution Gaming, Pragmatic Play, BGaming, Evoplay, Spearhead Studios, Rubyplay, Platiplus, Oryx Gaming, GameArt and many more.

All packages provided for game providers are done so using their own demo pages & resources (as they actively open this up for such malpractice), please really do not try to mis-use/duplicate to use on actual fair-play & small game providers.

Regardless you should **never** use any of the resources provided straight out of the box in any productional capacity.

More info on how to spot an abusing provider/aggregator will follow in some time @ [respins.io](https://respins.io).

## Got a great idea? Or are you simply motivated to create something out of this?

If you have a great idea I can personally invest up-to 50K Euro's to your business start-up if you actively use & credit project, and ofcourse if your idea is interesting & "innovating" enough, basically innovating is to beat trash casino systems that are still globally used, in example by parties as MondoGaming.eu so while not hard to beat, if you have something unique or contribute - feel free to e-mail [investments@respins.io](mailto:investments@respins.io) or contact through Telegram.

Please do note that would involve due digiligence and all would be paid only and alone towards actual business title alone (where ever in the world).

While small amount in retrospect, I rather give many people a chance and have just 1 do 'ok', some cases you only need 10-20k at most to get going - get your casino license and whatever boring costs. 

While 50k Euro's is initial absolute top amount per project, can ofcourse bump this up to hundreds~ of whatever, if you are good and we're good fit then we can work together just have to be safe with internet people ^_^.
 
Not investing in any project without their own (active) accredited developers.

