
    <?php 

        $message = [
            'text' => 'Lorem ',
            'direction' => 'out',
            'status' => 'R',
            'hour' => '12:10'
        ];
    ?>

    <div class="message <?php echo($message['direction']); ?>">
        <p class="text">
            <?php echo($message['text']); ?>
        </p>
    
        <div class="time">
            <?php echo($message['hour']); ?>
        </div>

        <?php if($message['status'] != false): ?>
        <div class="status">
            <?php echo($message['status']); ?>
        </div>
        <?php endif; ?>
    </div>

    <style>
        .message{
            min-height: 10px;
            max-width: 85vw;
            border-radius: 5px;
            padding: 3px 3px 0 3px;
            margin: 2px;
        }
            .message .text{
                color: #ffffff;
                margin-bottom: 5px;
                font-size: 8px;
            }
            .message .time{
                size: 12px;
                color: #ffffff50;
                margin-bottom: 3px;
            }
        
            .message.in{
                background-color: black;
                align-self: flex-start;
            }
            .message.out{
                background-color: green;
                align-self: flex-end;
            }
    </style>

</body>
</html>
