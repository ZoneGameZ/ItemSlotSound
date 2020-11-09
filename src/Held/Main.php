<?php
/*/*/
////////////    // ///////   //             //   //////////
                //     //         //   ////          //   //
            //         //         //   //    //      //   //////////
        //            //          //   //      //    //   //
    //                //          //   //        //  //   //
 ///////////   //////////   //          ////   //////////
 /*/*/

namespace Held;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\entity\Entity;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\item\Item;
// Calling the sound function
// เรียกใช้เสียงต่างๆ
use pocketmine\level\sound\ClickSound;

class Main extends PluginBase implements Listener {
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this ,$this);
		}
	
	public function ItemHeld(PlayerItemHeldEvent $event){
		$player = $event->getPlayer();
		// Sound changer
		// เปลี่ยนเสียงตามที่เรียกใช้
		$player->getLevel()->addSound(new ClickSound($player));
		}
	}