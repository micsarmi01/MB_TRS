 < h t m l > 
 
 
 < ? p h p 
 r e q u i r e   ' d b c o n f i g . p h p ' ; 
 
 i f ( ! e m p t y ( $ _ P O S T ) ) { 
 	 $ E r r o r =   " " ; 
 	 i f ( e m p t y ( $ _ P O S T [ " f n a m e " ] ) ) { 
 	 	 $ E r r o r   . =   " < l i > M i s s i n g   F i r s t   N a m e ! < / l i > " ; 
 	 	 $ u s r n a m e b a d   =   1 ; 
 	 } 
 	 i f ( e m p t y ( $ _ P O S T [ " l n a m e " ] ) ) { 
 	 	 $ E r r o r   . =   " < l i > M i s s i n g   L a s t   N a m e ! < / l i > " ; 
 	 	 $ u s r n a m e b a d   =   1 ; 
 	 } 
 	 
 	 i f ( e m p t y ( $ _ P O S T [ " e m a i l " ] ) ) { 
 	 	 $ E r r o r   . =   " < l i > M i s s i n g   E m a i l ! < / l i > " ; 
 	 	 $ e m a i l b a d   =   1 ; 
 	 } 
 	 
 	 i f ( e m p t y ( $ _ P O S T [ " o t t e r " ] ) ) { 
 	 	 $ E r r o r   . =   " < l i > M i s s i n g   O t t e r   I D ! < / l i > " ; 
 	 	 $ e m a i l b a d   =   1 ; 
 	 } 
 
 	 
 	 
 	 i f ( e m p t y ( $ E r r o r ) ) { 
 	 	 
 	 	 i f ( ! $ d b l i n k ) 
 	 	 	 { 	 
 	 	 	 	 d i e ( ' C o u l d   n o t   c o n n e c t :   ' .   m y s q l _ e r r o r ( ) ) ; 
 	 	 	 } 
 	 	 $ r e s u l t   =   " I N S E R T   I N T O   c u s t o m e r s ( o t t e r _ i d ,   f n a m e ,   l n a m e ,   e m a i l ,   p n u m b e r ,   i n s t r u c t o r _ n a m e ,   c o u r s e ,   f a c u l t y )   
 	 	 V A L U E S   ( ' $ _ P O S T [ o t t e r ] ' , ' $ _ P O S T [ f n a m e ] ' , ' $ _ P O S T [ l n a m e ] ' , ' $ _ P O S T [ e m a i l ] ' , ' $ _ P O S T [ p h o n e ] ' , ' $ _ P O S T [ i n s t r u c t o r ] ' , ' $ _ P O S T [ c o u r s e ] ' , ' $ _ P O S T [ f a c u l t y ] ' ) " ; 
 	 	 
 	 	 
 	 	 i f   ( ! m y s q l _ q u e r y ( $ r e s u l t , $ d b l i n k ) ) 
 	 	 { 
 	 	 	 d i e ( ' E r r o r :   '   .   m y s q l _ e r r o r ( ) ) ; 
 	 	 } 
 	 	 
 	 	 $ r e s u l t 2   =   " I N S E R T   I N T O   o r d e r s ( f n a m e , l n a m e , i t e m ,   R e n t a l _ t e r m ,   c o m p ,   o t t e r i d ,   a c t i v e ,   e m a i l ) 
 	 	 V A L U E S ( ' $ _ P O S T [ f n a m e ] ' , ' $ _ P O S T [ l n a m e ] ' , ' $ _ P O S T [ i t e m ] ' , ' $ _ P O S T [ r e n t ] ' , 0 , ' $ _ P O S T [ o t t e r ] ' ,   0 ,   ' $ _ P O S T [ e m a i l ] ' ) " ; 
 	 	 
 	 
 	 	 
 	 
 	 	 
 	 	 i f   ( ! m y s q l _ q u e r y ( $ r e s u l t 2 , $ d b l i n k ) ) 
 	 	 { 
 	 	 	 d i e ( ' E r r o r :   '   .   m y s q l _ e r r o r ( ) ) ; 
 	 	 } 
 	 	 
 	         
 	 	 m y s q l _ c l o s e ( $ d b l i n k ) ; 
 	 	 
 
 	 } 
 	 e l s e   { 
 	 	 e c h o   ' < b r   / >   I n f o r m a t i o n   m i s s i n g :   < u l > ' . $ E r r o r .   ' < / u l > ' ; 
 	 } 
 } 
   	 
 
 	 $ d i s p _ f n a m e     =   i s s e t ( $ _ P O S T [ ' f n a m e ' ] ) ? $ _ P O S T [ ' f n a m e ' ] : ' ' ; 
 	 $ d i s p _ l n a m e     =   i s s e t ( $ _ P O S T [ ' l n a m e ' ] ) ? $ _ P O S T [ ' l n a m e ' ] : ' ' ; 
 	 $ d i s p _ e m a i l     =   i s s e t ( $ _ P O S T [ ' e m a i l ' ] ) ? $ _ P O S T [ ' e m a i l ' ] : ' ' ; 
 	 $ d i s p _ o t t e r     =   i s s e t ( $ _ P O S T [ ' o t t e r ' ] ) ? $ _ P O S T [ ' o t t e r ' ] : ' ' ; 
 ? > 
 
 < h e a d e r > 
 < d i v   a l i g n   = " c e n t e r " > 
 < i m g   s r c = " / c s u m b . p n g "   w i d t h = " 7 0 0 "   h e i g h t = " 1 8 0 " / > 
 < b r / > 
 < h 1 >   C S U M B   T E C H   S T O R E   2 < / h 1 > 
 < / d i v > 
 
 < / h e a d e r > 
 
 < b o d y > 
 < t a b l e   a l i g n = " c e n t e r "   w i d t h = " 5 0 0 "   b o r d e r = " 3 " > 
 < f o r m   i d = " r e n t _ f o r m "   a c t i o n = " < ? =   $ _ S E R V E R [ ' P H P _ S E L F ' ]   ? > "   m e t h o d = ' p o s t ' > 
 < d i v   a l i g n = " c e n t e r " > 
 < l a b e l   f o r = " R e n t   F o r m " > < b > R e n t a l   R e q u e s t   F o r m < / b > < / l a b e l > < / d i v > 
 
 < t h > 
 < d i v   a l i g n = " l e f t " > 
 < b r / > 
 < ? =   ( ( ! e m p t y ( $ f n a m e b a d ) )   ?   ' < d i v   c l a s s = " e r r o r " > '   :   ' ' )   ? > < l a b e l   f o r   =   " f n a m e " > F i r s t   N a m e : < / l a b e l > < i n p u t   t y p e = " t e x t "   n a m e = " f n a m e "   s i z e = " 2 5 "   m a x l e n g t h = " 4 0 "   v a l u e = ' < ? p h p   e c h o   h t m l e n t i t i e s ( $ d i s p _ f n a m e )   ? > ' > 
 < b r   / > < b r / > 
 < ? =   ( ( ! e m p t y ( $ l n a m e b a d ) )   ?   ' < d i v   c l a s s = " e r r o r " > '   :   ' ' )   ? > < l a b e l   f o r   =   " l n a m e " > L a s t   N a m e : < / l a b e l > < i n p u t   t y p e = " t e x t "   n a m e = " l n a m e "   s i z e = " 2 5 "   m a x l e n g t h = " 4 0 "   v a l u e = ' < ? p h p   e c h o   h t m l e n t i t i e s ( $ d i s p _ l n a m e )   ? > ' > 
 < b r   / > < b r / > 
 < ? =   ( ( ! e m p t y ( $ e m a i l b a d ) )   ?   ' < d i v   c l a s s = " e r r o r " > '   :   ' ' )   ? > < l a b e l   f o r   =   " e m a i l " > E m a i l   A d d r e s s : < / l a b e l > < i n p u t   t y p e = " t e x t "   n a m e = " e m a i l "   s i z e = " 2 5 "   m a x l e n g t h = " 4 0 "   v a l u e = ' < ? p h p   e c h o   h t m l e n t i t i e s ( $ d i s p _ e m a i l )   ? > ' > 
 < b r   / > < b r / > 
 < ? =   ( ( ! e m p t y ( $ o t t e r b a d ) )   ?   ' < d i v   c l a s s = " e r r o r " > '   :   ' ' )   ? > < l a b e l   f o r   =   " o t t e r " > O t t e r   I d : < / l a b e l > < i n p u t   t y p e = " t e x t "   n a m e = " o t t e r "   s i z e = " 2 5 "   m a x l e n g t h = " 4 0 "   v a l u e = ' < ? p h p   e c h o   h t m l e n t i t i e s ( $ d i s p _ o t t e r )   ? > ' > 
 < b r   / > < b r / > 
 < l a b e l   f o r   =   " p h o n e " > P h o n e   # :   < / l a b e l > < i n p u t   t y p e = " t e x t "   n a m e = " p h o n e "   s i z e = " 2 5 "   m a x l e n g t h = " 4 0 " > 
 < b r   / > < b r / > 
 < l a b e l   f o r   =   " c o u r s e " > C o u r s e   N a m e :   < / l a b e l > < i n p u t   t y p e = " t e x t "   n a m e = " c o u r s e "   s i z e = " 2 5 "   m a x l e n g t h = " 4 0 " > 
 < b r   / > < b r / > 
 < l a b e l   f o r   =   " i n s t r u c t o r " > I n s t r u c t o r   N a m e :   < / l a b e l > < i n p u t   t y p e = " t e x t "   n a m e = " i n s t r u c t o r "   s i z e = " 2 5 "   m a x l e n g t h = " 4 0 " > 
 < b r   / > < b r / > 
 
 < l a b e l   f o r   =   " f a c u l t y " > A r e   y o u   a n   i n s t r u c t o r ? < / l a b e l > 
 < s e l e c t   n a m e = " f a c u l t y " > 
 < o p t i o n   v a l u e   = " 0 " > N o < / o p t i o n > 
 < o p t i o n   v a l u e   = " 1 " > Y e s < / o p t i o n > 
 < / s e l e c t > 
 
 
 
 
 < b r / > < b r / > 
 < l a b e l   f o r   = " i t e m " > W h i c h   i t e m   w o u l d   y o u   l i k e   t o   r e n t ? < / l a b e l > 
 < s e l e c t   n a m e = " i t e m " > 
 < o p t i o n   v a l u e   = " - - " > - - i t e m - - < / o p t i o n > 
 < o p t i o n   v a l u e   = " M a c b o o k " > M a c B o o k < / o p t i o n > 
 < o p t i o n   v a l u e   = " i p a d " > i P a d < / o p t i o n > 
 < o p t i o n   v a l u e   = " h p _ l a p t o p " > H P   L a p t o p < / o p t i o n > 
 < / s e l e c t > 
 < b r / > < b r / > 
 < l a b e l   f o r   = " r e n t " > H o w   l o n g   w o u l d   y o u   l i k e   t o   r e n t   t h i s   d e v i c e ? < / l a b e l > 
 < s e l e c t   n a m e = " r e n t " > 
 < o p t i o n   v a l u e   = " - - " > - - r e n t - - < / o p t i o n > 
 < o p t i o n   v a l u e   = " 1   D a y " > 1   D a y < / o p t i o n > 
 < o p t i o n   v a l u e   = " 2   D a y s " > 2   D a y s < / o p t i o n > 
 < o p t i o n   v a l u e   = " 3   D a y s " > 3   D a y s < / o p t i o n > 
 < o p t i o n   v a l u e   = " 4   D a y s " > 4   D a y s < / o p t i o n > 
 < o p t i o n   v a l u e   = " 1   w e e k " > 1   W e e k < / o p t i o n > 
 < o p t i o n   v a l u e   = " 2   w e e k s " > 2   W e e k s < / o p t i o n > 
 < o p t i o n   v a l u e   = " 3   w e e k s " > 3   W e e k s < / o p t i o n > 
 < o p t i o n   v a l u e   = " 1   M o n t h " > 1   M o n t h < / o p t i o n > 
 < o p t i o n   v a l u e   = " 2   M o n t h s " > 2   M o n t h s < / o p t i o n > 
 < o p t i o n   v a l u e   = " S e m e s t e r " > E n t i r e   S e m e s t e r < / o p t i o n > 
 < / s e l e c t > 
 < b r / > < b r / > 
 < b r / > 
 < / d i v > 
 < d i v   a l i g n = " c e n t e r " > 
 < i n p u t   t y p e = " s u b m i t "   v a l u e = " S u b m i t " > 
 < b r / > 
 < / d i v > 
 < b r / > 
 < / t h > 
 
 < / f o r m > 
 < / t a b l e > 
 < / b o d y > 
 
 
 
 
 
 < / h t m l >