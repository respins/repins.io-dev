## Respins.io
Respins.io is a toolbox & toolkit based and meant for development within casino industry, whereas normally needing multi-systemed setup and more often then not you will not be able to locally/offline develop as relying on many aspects that are usually online.

In our case we are using and enforcing methods as used by BlueOcean.com, Softswiss.com etc. on their productional casino's - however this in contrary to the prior mentioned this should be used without malicious intent or any fraud activities.

Main goal is to combine (in package form) the following 3 industry areas within a single project:

 - Game Provider (gamedev-level): We are emulating real games in this project to retain the most authenticate technical experience

 - Aggregation (distribution-level): Emulating the technical link between the game-provider and the casino by relaying the info back and forth between the two.

 - Operator (casino-level): Think of casino-level adding/subtracting to balance based, authentication scaffolding and hopefully in time I can focus more on this area as I do enjoy this personally the most to develop & create, but as all is open source it's depending on what people want/need and how many of you guys will contribute to this project & community

This is a project actively in the making and completely free of charge & open-source. Visit [www.respins.io](https://respins.io) for more information on how you can participate development.

Some included tech-stack:
 - PHP Backend (Laravel)
 - Minio
 - Maria DB
 - Redis
 - Selenium (browser emulation)
 - Socketti & Pusher (nodejs/websocket)
 - Envoy

## Future
In future I would want to build more in regards to (open) or semi-open (freemium) sourced casino software (operator side). 

However in meantime I plan myself to release continued free of charge snippets & modules while providing free support to anyone needing help on setup and whatsoever through our community links, check [www.respins.io](https://respins.io)

## Modules
Initial setup is to try and package up as much as possible so that it becomes easy to lightweight opt-in specific features & moduels you actually need. Though however due to increasing lack of motivation to keep re-create the same (before being able to start with fun bit), I will be putting packaged in following setup:

- "respins-laravel"
    This is laravel baseplate, we're trying to keep this as close paired (if not 1:1 paired) to the original laravel project so you can keep this really as a simple and fast solution to setup or test iGaming development on your machine.

- "respins-base-functions"
    Initial functions to just get your first games working (closely paired could be considered being aggregation functions).
    Includes database migrations, seeding and so on.
    Includes helpers, as example: 
        Like proxy facades so you can communicate easily with genuine gameprovider servers, in most cases employing Softswiss/BlueOcean methods like f.e. changing demo games to look like genuine $/EUR games and what not. 
    This also holds the base in/out authentication and serves as normalization of win/loss/transactional storing etc. etc.

- "respins-game-X" (replace X by gameprovider/gamecategory, like name format f.e. respins-game-pragmaticplay etc.)
    Will try to keep game packages as opt-in standalone's so that it gives total and complete freedom on what type of games and what type of setup you can use.
    Releases under Respins.io will always be based on existing games and existing methods to be able to use these games for free.

    
## Got a great idea? Or are you simply motivated to create something out of this?

If you have a great idea I can personally invest up-to 50K Euro's to your business start-up if you actively use & credit project, and ofcourse if your idea is interesting & "innovating" enough, basically innovating is to beat trash casino systems that are still globally used, in example by parties as MondoGaming.eu so while not hard to beat, if you have something unique or contribute - feel free to e-mail [investments@respins.io](mailto:investments@respins.io) or contact through Telegram.

Please do note that would involve due digiligence and all would be paid only and alone towards actual business title alone (where ever in the world).

While small amount in retrospect, I rather give many people a chance and have just 1 do 'ok', some cases you only need 10-20k at most to get going - get your casino license and whatever boring costs. 

While 50k Euro's is initial absolute top amount per project, can ofcourse bump this up to hundreds~ of whatever, if you are good and we're good fit then we can work together just have to be safe with internet people ^_^.
 
Not investing in any project without their own (active) accredited developers.

