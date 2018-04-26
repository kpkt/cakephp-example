<h1>Contoh HTML Link</h1>
<a target="_blank" href="http://www.kpkt.gov.my" title="Laman Web KPKT">Pautan ke Laman Web</a>

<?php
echo '<br/>';
echo $this->Html->link('http://www.kpkt.gov.my');
echo '<br/>';
echo $this->Html->link('Pautan Laman Web KPKT', 'http://www.kpkt.gov.my');
echo '<br/>';
echo $this->Html->link(
    'Pautan Laman Web KPKT',
    'http://www.kpkt.gov.my',
    ['target' => '_blank', 'title' => 'Klik Di sini']
);
echo '<br/>';
echo $this->Html->link(
    'Pautan Laman Web KPKT',
    'http://www.kpkt.gov.my',
    [
        'target' => '_blank',
        'title' => 'Klik Di sini',
        'confirm' => 'Are you sure you to leave from this page?'
    ]
);