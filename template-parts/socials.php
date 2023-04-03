<?php include 'variables.php' ?>
<div class="socials_links">
    <?php if ($contacts_vk) :?> <a href="https://vk.com/<?= $contacts_vk ?>"><i class="fa fa-vk" aria-hidden="true"></i></a> <?php endif; ?>
    <?php if ($contacts_wa) :?> <a href="https://wa.me/<?= $contacts_wa ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> <?php endif; ?>
    <?php if ($contacts_tg) :?> <a href="https://tg.me/<?= $contacts_tg ?>"><i class="fa fa-telegram" aria-hidden="true"></i></a> <?php endif; ?>
    <?php if ($contacts_inst) :?> <a href="https://www.instagram.com/<?= $contacts_inst ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a> <?php endif; ?>
    <?php if ($contacts_fb) :?> <a href="https://facebook.com/<?= $contacts_fb ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a> <?php endif; ?>
</div>